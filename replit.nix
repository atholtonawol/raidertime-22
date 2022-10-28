{ pkgs }: {
	deps = [
		pkgs.php80Packages.composer
  pkgs.openssh_with_kerberos
  pkgs.php74
	];
}