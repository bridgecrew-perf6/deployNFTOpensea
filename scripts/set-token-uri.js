const SimpleCollectible = artifacts.require('SimpleCollectible')
const TOKENID = 0
module.exports = async callback => {
    const nft = await SimpleCollectible.deployed()

    console.log('Let\'s set the tokenURI of your characters');
    const tx = await nft.setTokenURI(0, "https://ipfs.io/ipfs/QmYx6GsYAKnNzZ9A6NvEKV9nf1VaDzJrqDR23Y8YSkebLU?filename=shiba-inu.png")
    const tx1 = await nft.setTokenURI(1, "https://ipfs.io/ipfs/QmTvsVaaHTuMNmwXgbfgkrztFEazAPyzmrb4VSS2PbqLjA?filename=the-chainlink-elf.json")
    console.log(tx)
    console.log(tx1)
    callback(tx.tx)
}