# Learnings

- Ansible’s documentation and syntax feel a bit too advanced for me right now, so it was challenging at first. However, I was still able to learn some of the basics. For starters, I learned that Ansible is an automation tool that simplifies repetitive tasks, especially in server management and deployment. It allows you to define tasks in playbooks using YAML, making it easier to automate things like installing packages, starting services, and deploying applications. Even though I’m still getting used to the syntax, I’m beginning to understand how powerful it can be for Devops workflows. I’m still in the learning process, but I’m willing to learn more about it.

## Struggles

- Since the Ansible documentation is very vast and detailed, I struggled to fully understand the syntax and the correct commands to use inside the YAML YML file. It often felt overwhelming at first, so I relied on a lot of trial and error to make things work. Sometimes small mistakes in indentation or module usage would cause errors, which made debugging challenging. However, through experimenting and fixing those errors, I gradually started to understand how the structure of a playbook works

- I also struggled to find the right syntax and commands online for automating Docker and running containers using Ansible. There were many examples available, but not all of them matched my setup or version, which made it confusing. Because of this, I had to experiment a lot, compare different sources, and go through trial and error before I could successfully automate Docker tasks like building images, starting containers, and running Docker Compose

## References

- https://docs.ansible.com/projects/ansible/latest/collections/community/docker/docker_compose_v2_module.html#community-docker-docker-compose-v2-module-manage-multi-container-docker-applications-with-docker-compose-cli-plugin

- https://dev.to/lovestaco/install-docker-with-ansible-on-ubuntu-official-repo-docker-compose-578b#:~:text=%2D%2D%2D%20%2D%20name:%20Install%20Docker%20on,ubuntu%20groups:%20docker%20append:%20yes

- https://github.com/geerlingguy/ansible-role-docker

- https://docs.ansible.com/projects/ansible-core/2.14/porting_guides/porting_guide_core_2.14.html
