# drupaldev
A blt-vagrant drupal development code setup.


Steps to install

- git clone git@github.com:piyushraihub/drupaldev.git
- cd drupaldev/
- composer update  
- vagrant up
  - If there would be anything go wrong during provisioning then run below command 
  
         - vagrant provision         
  - If you see error like pip installation. Follow below setps:
  
         - vagrant ssh          
         -  sudo apt-get install software-properties-commo
            sudo apt-add-repository universe
            sudo apt-get update
            sudo apt-get install python-pip
         - and then exit.
- Now run again vagrant up .. it will take approx 10-15 minutes after that your setup will be completed.
