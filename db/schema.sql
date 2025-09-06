-- iSwift Website v1 database schema
--
-- This file sets up the MySQL database used by the public lead forms
-- and the admin panel. It creates two tables: `users` and `leads`.
-- Passwords are stored in plain text for v1 as per specification.
-- Sample accounts are provided for immediate login after import.

CREATE DATABASE IF NOT EXISTS iswift_web;
USE iswift_web;

-- Users table
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(160) NOT NULL UNIQUE,
  role ENUM('admin','employee') DEFAULT 'employee',
  password_plaintext VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Seed users
INSERT INTO users (name,email,role,password_plaintext) VALUES
('Admin User','admin@iswift.in','admin','admin123'),
('Sales Exec','sales@iswift.in','employee','sales123');

-- Leads table
CREATE TABLE IF NOT EXISTS leads (
  id BIGINT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(160) NOT NULL,
  phone VARCHAR(40) NOT NULL,
  email VARCHAR(160),
  city VARCHAR(120),
  interest VARCHAR(80),
  message TEXT,
  source_page VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;