-- Gym Final Website SQL schema
-- Import this file into MySQL to create the core tables used by the PHP API.

CREATE TABLE IF NOT EXISTS `settings` (
  `key` VARCHAR(191) PRIMARY KEY,
  `value` TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `users` (
  `id` VARCHAR(64) PRIMARY KEY,
  `data` TEXT NOT NULL,
  `created_at` TEXT NOT NULL,
  `updated_at` TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `trainers` (
  `id` VARCHAR(64) PRIMARY KEY,
  `data` TEXT NOT NULL,
  `created_at` TEXT NOT NULL,
  `updated_at` TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` VARCHAR(64) PRIMARY KEY,
  `data` TEXT NOT NULL,
  `created_at` TEXT NOT NULL,
  `updated_at` TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` VARCHAR(64) PRIMARY KEY,
  `data` TEXT NOT NULL,
  `created_at` TEXT NOT NULL,
  `updated_at` TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `kv_store` (
  `key` VARCHAR(191) PRIMARY KEY,
  `value` TEXT NOT NULL,
  `updated_at` TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `settings` (`key`, `value`)
VALUES ('admin_password', 'admin')
ON DUPLICATE KEY UPDATE `value` = VALUES(`value`);

INSERT INTO `users` (`id`, `data`, `created_at`, `updated_at`)
VALUES
(
  'USR001',
  JSON_OBJECT(
    'id', 'USR001',
    'name', 'Arjun Kumar',
    'password', 'password123',
    'email', 'arjun@example.com',
    'phone', '9876543210',
    'dob', '1995-04-12',
    'address', 'Mumbai',
    'plan', 'Pro',
    'joinDate', '2024-01-15',
    'status', 'active'
  ),
  '2024-01-15T00:00:00Z',
  '2024-01-15T00:00:00Z'
),
(
  'USR002',
  JSON_OBJECT(
    'id', 'USR002',
    'name', 'Priya Sharma',
    'password', 'password123',
    'email', 'priya@example.com',
    'phone', '9876543211',
    'dob', '1992-08-22',
    'address', 'Delhi',
    'plan', 'Elite',
    'joinDate', '2023-06-10',
    'status', 'active'
  ),
  '2023-06-10T00:00:00Z',
  '2023-06-10T00:00:00Z'
)
ON DUPLICATE KEY UPDATE `data` = VALUES(`data`), `updated_at` = VALUES(`updated_at`);

INSERT INTO `trainers` (`id`, `data`, `created_at`, `updated_at`)
VALUES
(
  'TRN001',
  JSON_OBJECT(
    'id', 'TRN001',
    'name', 'Vikram Kumar',
    'password', 'trn12',
    'specialization', 'HIIT',
    'bio', 'Expert in high intensity interval training.',
    'phone', '9876543211',
    'status', 'active'
  ),
  '2024-01-01T00:00:00Z',
  '2024-01-01T00:00:00Z'
),
(
  'TRN002',
  JSON_OBJECT(
    'id', 'TRN002',
    'name', 'Sneha Kapoor',
    'password', 'password123',
    'specialization', 'Zumba',
    'bio', 'Dance fitness professional.',
    'phone', '9876543212',
    'status', 'active'
  ),
  '2024-01-01T00:00:00Z',
  '2024-01-01T00:00:00Z'
)
ON DUPLICATE KEY UPDATE `data` = VALUES(`data`), `updated_at` = VALUES(`updated_at`);

INSERT INTO `attendance` (`id`, `data`, `created_at`, `updated_at`)
VALUES
(
  'att_1',
  JSON_OBJECT(
    'id', 'att_1',
    'user_id', 'USR001',
    'name', 'Arjun Kumar',
    'role', 'user',
    'attendance_date', '2026-06-11',
    'attendance_time', '08:15 AM',
    'status', 'Present',
    'qr_scan_timestamp', '2026-06-11T08:15:00.000Z',
    'created_at', '2026-06-11T08:15:00.000Z',
    'plan', 'Pro'
  ),
  '2026-06-11T08:15:00.000Z',
  '2026-06-11T08:15:00.000Z'
),
(
  'att_2',
  JSON_OBJECT(
    'id', 'att_2',
    'user_id', 'USR002',
    'name', 'Priya Sharma',
    'role', 'user',
    'attendance_date', '2026-06-11',
    'attendance_time', '09:30 AM',
    'status', 'Present',
    'qr_scan_timestamp', '2026-06-11T09:30:00.000Z',
    'created_at', '2026-06-11T09:30:00.000Z',
    'plan', 'Elite'
  ),
  '2026-06-11T09:30:00.000Z',
  '2026-06-11T09:30:00.000Z'
),
(
  'att_3',
  JSON_OBJECT(
    'id', 'att_3',
    'user_id', 'TRN001',
    'name', 'Vikram Kumar',
    'role', 'trainer',
    'attendance_date', '2026-06-11',
    'attendance_time', '07:00 AM',
    'status', 'Present',
    'qr_scan_timestamp', '2026-06-11T07:00:00.000Z',
    'created_at', '2026-06-11T07:00:00.000Z',
    'plan', ''
  ),
  '2026-06-11T07:00:00.000Z',
  '2026-06-11T07:00:00.000Z'
)
ON DUPLICATE KEY UPDATE `data` = VALUES(`data`), `updated_at` = VALUES(`updated_at`);
