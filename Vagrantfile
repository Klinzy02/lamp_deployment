# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "ubuntu/focal64"

  # Define two VMs - Master and Slave
  %w(master slave).each do |name|
    config.vm.define name do |vm|
      vm.vm.hostname = name
      vm.network "private_network", ip: "192.168.50.#{name.eql?('master') ? 10 : 20}"
    end
  end
end

