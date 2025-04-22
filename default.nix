{ pkgs ? import <nixpkgs> {} }:
  pkgs.mkShell {
    buildInputs = [
      pkgs.php
      pkgs.php81Packages.composer
    ];
  }