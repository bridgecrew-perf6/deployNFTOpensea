App = {
  web3Provider: null,
  contracts: {},
  account: '0x0',
  loading: false,
  //contractAddress: "0x7dc6C1bfBa40A3DdfC5Cc9F18D65a641FFd5DB87",//local
  //contractAddress: "0x55A5819d4f929d5eaD62FdB886a14CB31A21F314",//ropsten
  contractAddress: "0x61FA78EdAa2d4e85E114F1f4eD700098D1490890",//rinkeby
  //
  init: function() {
    //console.log("App initialized...")
    return App.initWeb3();
  },

  initWeb3: function() {
     if (typeof window.ethereum == 'undefined') {
        alert("MetaMask is not installed!")
     } else {
       ethereum.request({ method: 'eth_requestAccounts' });
     }

     if (typeof web3 !== 'undefined') {
       // If a web3 instance is already provided by Meta Mask.
       App.web3Provider = web3.currentProvider;
       web3 = new Web3(web3.currentProvider);
     } else {
      // Specify default instance if no web3 instance provided
      App.web3Provider = new Web3.providers.HttpProvider('https://ropsten.infura.io/v3/a838fe95ee1349dda7da56bce7f6c2ea');
      web3 = new Web3(App.web3Provider);
    }

    web3.eth.defaultAccount = web3.eth.accounts[0];

    return App.initContracts();
  },

  initContracts: function() {
    $.getJSON("/build/contracts/SimpleCollectible.json", function(simpleCollectible) {
      App.contracts.SimpleCollectible = TruffleContract(simpleCollectible);
      App.contracts.SimpleCollectible.setProvider(App.web3Provider);

      App.contracts.SimpleCollectible.at(App.contractAddress).then(function(simpleCollectible) {
      //App.contracts.SimpleCollectible.deployed().then(function(simpleCollectible) {
        return simpleCollectible;
      }).then(function(simpleCollectible) {
        console.log("Contract Address:", simpleCollectible.address);
        return simpleCollectible.symbol();
      }).then(function (symbol) {
        console.log("symbol:", symbol);
      });

      return App.render();
    });

  },

  // Listen for events emitted from the contract
  listenForEvents: function() {

  },

  render: function() {
    if (App.loading) {
      return;
    }
    App.loading = true;

    var loader  = $('#loader');
    var content = $('#content');

    loader.show();
    content.hide();

    // Load account data
    web3.eth.getCoinbase(function(err, account) {
      if(err === null) {
        App.account = account;
        $('#accountAddress').html("Your Account: " + account);
      }
    })

    App.contracts.SimpleCollectible.at(App.contractAddress).then(function(simpleCollectible) {
    //App.contracts.SimpleCollectible.deployed().then(function(simpleCollectible) {
      return simpleCollectible.currentTokenId();
    }).then(function (tokenId) {
       //console.log(tokenId.toNumber());
      if(tokenId) {
        $("#currentTokenId").html(tokenId.toNumber());
      } else {
        $("#currentTokenId").html(1);
      }

      App.loading = false;
      loader.hide();
      content.show();
    })
  },

  mint: function () {
    console.log(App.contractAddress);
    App.contracts.SimpleCollectible.at(App.contractAddress).then(function(simpleCollectible) {
    //App.contracts.SimpleCollectible.deployed().then(function(simpleCollectible) {
      var tokenId=parseInt($("#currentTokenId").text())+parseInt($("#amount").val());

      ///console.log("tokenId:"+tokenId);
      var metadataUrl = "https://mintnft.herokuapp.com/metadata/json/tigers/tiger"+tokenId+".json";
      console.log("metadataUrl:"+metadataUrl);
      var result = simpleCollectible.setTokenURINoId(metadataUrl);

      return tokenId;
    }).then(function (tokenId) {
      //console.log("tokenId1:"+tokenId);
      $("#currentTokenId").html(tokenId);
    });

  }
}

$(function() {
  $(window).load(function() {
    App.init();
  })
});