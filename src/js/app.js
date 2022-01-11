App = {
  web3Provider: null,
  contracts: {},
  account: '0x0',
  loading: false,

  init: function() {
    //console.log("App initialized...")
    return App.initWeb3();
  },

  initWeb3: function() {
    if (typeof web3 !== 'undefined') {
      // If a web3 instance is already provided by Meta Mask.
      App.web3Provider = web3.currentProvider;
      web3 = new Web3(web3.currentProvider);
    } else {
      // Specify default instance if no web3 instance provided
      App.web3Provider = new Web3.providers.HttpProvider('http://localhost:7545');
      web3 = new Web3(App.web3Provider);
    }
    //
    web3.eth.defaultAccount = web3.eth.accounts[0];

    return App.initContracts();
  },

  initContracts: function() {
    $.getJSON("SimpleCollectible.json", function(simpleCollectible) {
      App.contracts.SimpleCollectible = TruffleContract(simpleCollectible);
      App.contracts.SimpleCollectible.setProvider(App.web3Provider);
      App.contracts.SimpleCollectible.deployed().then(function(simpleCollectible) {
        console.log("Contract Address:", simpleCollectible.address);
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

    App.contracts.SimpleCollectible.deployed().then(function(simpleCollectible) {
      return simpleCollectible.currentTokenId();
    }).then(function (tokenId) {
       //console.log(tokenId.toNumber());

      $("#currentTokenId").html(tokenId.toNumber());
      $("#currentTokenIdHidden").val(tokenId.toNumber());

      App.loading = false;
      loader.hide();
      content.show();
    })
  },

  mint: function () {
    App.contracts.SimpleCollectible.deployed().then(function(simpleCollectible) {
      var tokenId=parseInt($("#currentTokenIdHidden").val())+parseInt($("#amount").val());
      console.log("tokenId:"+tokenId);

      var result = simpleCollectible.setTokenURI(tokenId, "https://nftrarity.herokuapp.com/metadata/rinkeby/2-kevinGatesAvatar.json");

      return tokenId;
    }).then(function (tokenId) {
      $("#currentTokenId").html(tokenId.toNumber());
      $("#currentTokenIdHidden").val(tokenId.toNumber());

    })
  }
}

$(function() {
  $(window).load(function() {
    App.init();
  })
});