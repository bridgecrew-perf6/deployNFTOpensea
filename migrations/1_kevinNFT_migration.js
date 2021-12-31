const kevinNFT = artifacts.require("KevinNFT");

module.exports = function(deployer) {
  deployer.deploy(kevinNFT);
};