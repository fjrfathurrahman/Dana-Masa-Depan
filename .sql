-- Active: 1724063840536@@127.0.0.1@3306@db_website_danamasadepan
CREATE TABLE nasabah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nisn VARCHAR(11) NOT NULL,
    nama VARCHAR(125) NOT NULL,
    kelas VARCHAR(10) NOT NULL,
    jurusan VARCHAR(50) NOT NULL,
    jenis_kelamin VARCHAR(10) NOT NULL,
    alamat TEXT NOT NULL,
    no_handphone VARCHAR(15) NOT NULL,
    email VARCHAR(125) NOT NULL,
    saldo DECIMAL(15, 2) NOT NULL DEFAULT 0.00,
    tanggal_daftar TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE operator (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(125) NOT NULL,
    role ENUM('admin', 'operator') NOT NULL DEFAULT 'operator',
    tanggal_dibuat TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE transaksi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nasabah_id INT,
    operator_username VARCHAR(50),
    jenis_transaksi ENUM('penyetoran', 'penarikan') NOT NULL,
    jumlah DECIMAL(15, 2) NOT NULL,
    tanggal_transaksi TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (nasabah_id) REFERENCES nasabah(id) ON DELETE CASCADE,
    FOREIGN KEY (operator_username) REFERENCES operator(username) ON DELETE SET NULL
);
