# LEARNINGS

- Docker is pretty tricky but also fun to learn. I’ve had a hard time finding good resources since the official docs feel a bit too advanced for me. But I’ve picked up that, at its core, Docker is all about containerizing a system.

## Dockerfile for PHP application

- Creating a Dockerfile for a single PHP app is pretty straightforward. I mostly referenced commands I saw on YouTube and Docker Hub. From writing the Dockerfile, I learned that you need to include every command for installing dependencies and extensions. At first, I didn’t really know the right commands or syntax for installing PHP extensions, so it was a bit of trial and error.

## Docker Composer YML

- The Docker Compose file and setting up Nginx was kind of tricky for me at first I had trouble figuring out how to get all the services to work together. I ended up looking at examples on Docker Hub and just doing a lot of trial and error. One thing I did learn is that you can use `docker exec` to get inside a container, which lets you check things like MySQL storage and interact with the database directly. But in all honesty, most of it was just me experimenting and figuring out the syntax as I went

## Lessons Learned

- Always double-check file paths and volume mounts in Docker Compose to avoid errors like "not a directory" or "file not found".
- `docker exec` is your best friend for inspecting running containers.
- When debugging PHP + Nginx, verify both the container paths and the configuration (`default.conf`) inside the container.
- Start simple: build your PHP container first, then add MySQL, and finally connect Nginx.
- Don’t be afraid of trial and error—Docker syntax can be picky, and experimentation is key.
- Keeping Dockerfiles and Compose files organized by service and folder structure.

### References

- https://medium.com/@victoria.kruczek_15509/create-a-local-database-with-docker-compose-and-view-it-in-mysql-workbench-974aee047874

- https://www.youtube.com/watch?v=kzKBoszXiR4&t=28s

- https://www.geeksforgeeks.org/devops/docker-compose-for-php-applications/
