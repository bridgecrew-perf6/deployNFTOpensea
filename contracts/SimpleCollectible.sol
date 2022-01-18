// SPDX-License-Identifier: MIT
pragma solidity 0.8.10;

import "@openzeppelin/contracts/token/ERC721/ERC721.sol";
import "@openzeppelin/contracts/token/ERC721/extensions/ERC721URIStorage.sol";
import "@openzeppelin/contracts/access/Ownable.sol";

contract SimpleCollectible is ERC721, ERC721URIStorage, Ownable {
    uint256  public currentTokenId=1;

    constructor() ERC721("KevinNFT", "KEVIN") {}

    function setTokenURINoId(string memory uri)
    public
    onlyOwner
    {
        _safeMint(msg.sender, currentTokenId);
        _setTokenURI(currentTokenId, uri);
        currentTokenId = currentTokenId + 1;
    }

    function setTokenURI(uint256 tokenId, string memory uri)
    public
    onlyOwner
    {
        _safeMint(msg.sender, tokenId);
        _setTokenURI(tokenId, uri);
        currentTokenId = tokenId;
    }

    function setTokenURIById(uint256 tokenId, string memory uri)
    public
    onlyOwner
    {
        _safeMint(msg.sender, tokenId);
        _setTokenURI(tokenId, uri);
        currentTokenId = tokenId;
    }

    function tokenURI(uint256 tokenId)
    public
    view
    override(ERC721, ERC721URIStorage)
    returns (string memory)
    {
        return super.tokenURI(tokenId);
    }

    function getTokenId() public view returns (uint256) {
        return currentTokenId;
    }

    // The following functions are overrides required by Solidity.
    function _burn(uint256 tokenId) internal override(ERC721, ERC721URIStorage) {
        super._burn(tokenId);
    }
}