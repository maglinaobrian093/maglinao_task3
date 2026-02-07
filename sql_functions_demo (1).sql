SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

SET NAMES utf8mb4;

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(120) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `bonus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `employees` (`id`, `full_name`, `department`, `email`, `created_at`, `bonus`) VALUES
(1, 'Juan Dela Cruz', 'HR', 'juan.delacruz@mail.com', '2026-02-07 19:07:20', 100),
(2, 'Maria Clara', 'IT', 'maria.clara@mail.com', '2026-02-07 19:07:20', 100),
(3, 'Pedro Penduko', 'Finance', 'pedro.penduko@mail.com', '2026-02-07 19:07:20', 100),
(4, 'Ana Santos', 'Sales', 'ana.santos@mail.com', '2026-02-07 19:07:20', 200),
(5, 'Carlos Reyes', 'IT', 'carlos.reyes@mail.com', '2026-02-07 19:07:20', 200),
(6, 'Bea Lopez', 'HR', 'bea.lopez@mail.com', '2026-02-07 19:07:20', 200),
(7, 'Dianne Garcia', 'Finance', 'dianne.garcia@mail.com', '2026-02-07 19:07:20', NULL),
(8, 'Erwin Tan', 'Sales', 'erwin.tan@mail.com', '2026-02-07 19:07:20', NULL),
(9, 'Faye Mendoza', 'IT', NULL, '2026-02-07 19:07:20', NULL),
(10, 'Gino Navarro', 'HR', 'gino.navarro@mail.com', '2026-02-07 19:07:20', NULL),
(11, 'Hannah Lim', 'Sales', 'hannah.lim@mail.com', '2026-02-07 19:07:20', NULL),
(12, 'Ivan Ramos', 'Finance', 'ivan.ramos@mail.com', '2026-02-07 19:07:20', NULL);

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `orders` (`id`, `employee_id`, `amount`, `order_date`) VALUES
(1, 1, 95.50, '2026-01-05 10:15:00'),
(2, 2, 150.75, '2026-01-08 14:20:00'),
(3, 3, 999.99, '2026-01-10 09:05:00'),
(4, 4, 1000.00, '2026-01-12 16:45:00'),
(5, 5, 1250.40, '2026-01-15 11:30:00'),
(6, 6, 300.10, '2026-01-18 08:10:00'),
(7, 7, 780.33, '2026-01-20 19:25:00'),
(8, 8, 45.00, '2026-01-22 07:55:00'),
(9, 9, 2200.99, '2026-01-25 13:00:00'),
(10, 10, 670.66, '2026-01-28 21:40:00'),
(11, 11, 510.05, '2026-02-01 12:12:12'),
(12, 12, 50.25, '2026-02-03 06:30:00');

ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1`
  FOREIGN KEY (`employee_id`)
  REFERENCES `employees` (`id`)
  ON DELETE SET NULL
  ON UPDATE CASCADE;

COMMIT;
