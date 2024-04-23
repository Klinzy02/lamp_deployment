# Provisioning and Deployment

To provision and deploy your LAMP (Linux, Apache, MySQL, PHP) stack, follow these steps:

1. Run `vagrant up` in your project directory to provision the virtual machines.
2. SSH into the master VM using `vagrant ssh master`.
3. Make the deployment script executable by running `chmod +x master-deploy.sh`.
4. Run the deployment script manually on the master VM using `./master-deploy.sh`. This step verifies that the script works as expected.
5. Finally, execute the playbook and deploy the LAMP stack on the slave VM by running `ansible-playbook deploy.yml`.

