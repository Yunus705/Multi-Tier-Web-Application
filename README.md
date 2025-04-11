# 🌐 Multi-Tier Web Application Deployment on AWS

This project demonstrates the deployment of a **multi-tier architecture** web application on AWS using various AWS services like EC2, RDS, Load Balancer, Auto Scaling, CloudWatch, and SNS.

---

## 🏗️ Architecture Overview

Client --> Application Load Balancer --> EC2 Web Servers --> RDS (MySQL) | CloudWatch + SNS

- **Frontend & Backend:** Hosted on EC2 (PHP + MySQL Client)
- **Database:** AWS RDS (MySQL)
- **Load Balancing:** ALB distributes traffic across EC2 instances
- **Auto Scaling:** ASG automatically adds/removes EC2s based on CPU
- **Monitoring:** CloudWatch dashboard & alarms
- **Notification:** SNS sends email alerts when alarms are triggered
- **Network Layer:** Custom VPC with subnets, route tables, IGW

---

## 🔧 Services Used

| Service         | Description                                     |
|-----------------|-------------------------------------------------|
| EC2             | Hosts the web server and application            |
| RDS             | Stores form data in a MySQL database            |
| ALB             | Load balances traffic across EC2 instances      |
| Auto Scaling    | Ensures availability and cost-efficiency        |
| CloudWatch      | Monitoring & Dashboard for CPU/Memory usage     |
| SNS             | Email alerts on high CPU usage alarms           |
| VPC             | Custom networking with public/private subnets   |
| Bastion Host    | Secure access to RDS in private subnet          |

---

## ✨ Features

- Form-based data collection (name, age, city, phone, email)
- Data is securely stored in RDS
- Custom UI with success message after form submission
- Golden Image (AMI) created for easy EC2 replication
- Load testing with `stress` to trigger scaling
- Fully working Auto Scaling Policy with CloudWatch alarms
- Real-time metrics visualization in a custom dashboard

---

## 📊 CloudWatch Dashboard

The dashboard includes:
- CPU Utilization
- Memory Usage
- Alarm Status
- Instance Count

---

## 📫 Notifications (SNS)

Configured to send email alert when:
- CPU usage exceeds threshold
- Auto Scaling event occurs

---

## 📁 Project Structure

multi-tier-web-application/
│
├── index.php                   # Main frontend form (hosted on EC2)
├── db_config.php               # Database connection config (connects to RDS)
├── readme.md                   # Project overview and instructions
└── .gitignore                  # GitHub ignore rules (optional)


---

## 🚀 Auto Scaling Policy (Sample)

- **Scale Up:** Add instance when CPU > 60% for 2 minutes
- **Scale Down:** Remove instance when CPU < 30% for 5 minutes

---


## 🔐 Security

- Security Groups properly configured for EC2 and RDS
- Bastion Host used for private subnet access
- No open ports for DB access from public IPs

---

## 🧠 Learnings

- Designed production-like multi-tier AWS architecture
- Gained hands-on experience with Cloud Monitoring & Scaling
- Simulated real-world traffic to trigger Auto Scaling
- Built secure infrastructure using custom VPC

---

