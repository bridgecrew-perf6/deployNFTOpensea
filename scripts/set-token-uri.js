const SimpleCollectible = artifacts.require('SimpleCollectible')
const TOKENID = 0
module.exports = async callback => {
    const nft = await SimpleCollectible.deployed()

    console.log('Let\'s set the tokenURI of your images');

    // const tx = await nft.setTokenURI(0, "https://ipfs.io/ipfs/Qmd9MCGtdVz2miNumBHDbvj8bigSgTwnr4SbyH6DNnpWdt?filename=0-PUG.json")
    // const tx1 = await nft.setTokenURI(1, "https://ipfs.io/ipfs/QmdryoExpgEQQQgJPoruwGJyZmz6SqV4FRTX1i73CT3iXn?filename=1-SHIBA_INU.json")
    // const tx2 = await nft.setTokenURI(2, "https://ipfs.io/ipfs/QmbBnUjyHHN7Ytq9xDsYF9sucZdDJLRkWz7vnZfrjMXMxs?filename=2-ST_BERNARD.json")
    //
    // console.log(tx)
    // console.log(tx1)
    // console.log(tx2)


    const tx = await nft.setTokenURI(0, "https://nftrarity.herokuapp.com/metadata/rinkeby/2-kevinGatesAvatar.json")

    console.log(tx)

    callback(tx.tx)
}