# Cloud Secure Web Application

## Project Overview

This project demonstrates the deployment of a secure PHP web application on AWS EC2 using Apache, MariaDB, Docker, GitHub, and Linux.

The application provides user registration and login functionality and showcases cloud deployment and DevOps concepts.

---

## Technologies Used

- AWS EC2
- Amazon Linux 2023
- Apache HTTP Server
- PHP
- MariaDB
- GitHub
- Docker

---

## Features

- User Registration
- User Login
- Database Connectivity
- Cloud Deployment
- Docker Containerization
- System Monitoring

---

## Project Architecture

User Browser
↓
AWS EC2 Instance
↓
Apache Web Server
↓
PHP Application
↓
MariaDB Database

Docker Container used for application deployment.

---

## Deployment Steps

### Local Development

1. Install XAMPP
2. Create PHP application
3. Configure MySQL database
4. Test locally

### GitHub Integration

```bash
git init
git add .
git commit -m "Initial Commit"
git push origin main
```

### AWS Deployment

1. Launch EC2 Instance
2. Configure Security Groups
3. Install Apache
4. Install PHP
5. Install MariaDB
6. Clone Repository
7. Deploy Application

### Docker Deployment

Build Image:

```bash
sudo docker build -t cloud-app .
```

Run Container:

```bash
sudo docker run -d -p 8080:80 cloud-app
```

---

## Monitoring Commands

Apache Status:

```bash
sudo systemctl status httpd
```

MariaDB Status:

```bash
sudo systemctl status mariadb
```

CPU Monitoring:

```bash
top
```

Disk Monitoring:

```bash
df -h
```

---

## Project Links

### GitHub Repository

https://github.com/angel12-yi/cloud-secure-web-app

### Main Application

http://13.61.104.36

### Docker Deployment

http://13.61.104.36:8080

---

## Screenshots

- AWS EC2 Dashboard
- GitHub Repository
- Login Page
- Registration Page
- Docker Installation
- Docker Build
- Docker Container Running
- Apache Status
- MariaDB Status
- Monitoring Commands

---

## Outcome

Successfully deployed a PHP web application on AWS EC2 with MariaDB database integration and Docker containerization.

---

## Author

Angel Shaji

BCA Student

Marian College Kuttikkanam

Internship at IPSR Solutions Ltd
## Project Links

### GitHub Repository
https://github.com/angel12-yi/cloud-secure-web-app

### AWS Deployment
http://13.61.104.36

### Docker Deployment
http://13.61.104.36:8080

---

## Screenshots

- AWS EC2 Instance Running
- Login Page
- Registration Page
- Dashboard Page
- Docker Container Running
- GitHub Repository

---

## Author

Angel Shaji

BCA Student

Marian College Kuttikkanam

Internship Project - IPSR Solutions Ltd
