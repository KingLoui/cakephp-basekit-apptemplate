# -*- mode: ruby -*-
# vi: set ft=ruby :



Vagrant.configure("2") do |config|

	config.hostmanager.enabled = true
	config.hostmanager.manage_host = true
	config.hostmanager.manage_guest = true
	config.hostmanager.ignore_private_ip = false
	config.hostmanager.include_offline = true


    config.vm.box = "scotch/box"
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.hostname = "basekit"
    #config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=666"]
    
    # Optional NFS. Make sure to remove other synced_folder line too
    config.vm.synced_folder ".", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666"] }

    config.vm.provision "shell", inline: <<-SHELL
        mv /var/www/public /var/www/public_html
        sudo sed -i s,/var/www/public,/var/www/webroot,g /etc/apache2/sites-available/000-default.conf
        sudo sed -i s,/var/www/public,/var/www/webroot,g /etc/apache2/sites-available/scotchbox.local.conf
        sudo service apache2 restart
        sudo chmod +x /var/www/build.sh
        /var/www/build.sh
    SHELL

end
