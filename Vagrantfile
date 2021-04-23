Vagrant.configure("2") do |config|
  config.vm.provider :virtualbox do |vb|
    vb.name = "FileCloud-PHP"
  end
  config.vm.box = "ubuntu/focal64"
  config.ssh.forward_agent = true
  config.vm.network :forwarded_port, guest: 22, host: 10029, id: "ssh"
  config.vm.network "private_network", type: "dhcp"
  config.vm.provision "shell", path: "vagrant/VagrantProvision.sh"
end
