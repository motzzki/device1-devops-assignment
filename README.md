# Prerequisites

- Windows 10/11
- WSL (Windows Subsystem for Linux) / any Linux OS/distribution
- Docker Desktop (includes Docker Engine and Docker Compose)
- Ansible (installed inside your WSL environment)

# How to Run the Setup

- Step 1: Start WSL
  Open your Ubuntu (or other Linux) terminal and make sure it’s updated:
  `sudo apt update && sudo apt upgrade -y`
- Step 2: Verify Docker Installation
  Check that Docker Desktop is running and Docker is accessible in your WSL environment:
  `docker --version`
  `docker compose --version`
- Step 3: Verify Ansible Installation
  `ansible --version`
- Step 4: Deploy Using Docker Compose
  From the project root directory:
  `docker compose up -d`
  To stop containers:
  `docker compose down`
- Step 5: Deploy Using Ansible
  Make sure your inventory file (inventory.ini) points to the correct hosts:
  `ansible-playbook -i inventory.ini deploy.yml --ask-become-pass`
  password: WSL user password

# Limitations

- Docker Desktop Dependency – On Windows, Docker Desktop must be running for containers to start.
