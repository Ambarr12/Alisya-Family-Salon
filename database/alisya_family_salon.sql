-- Insert products data
INSERT INTO products (image, name, title_one, title_two, created_at, updated_at) VALUES
('images/01JG0WW5KDF4TCBDN61ZCZNQRX.jpg', 'Smooth', 'Smoothing One Step', 'Smoothing Jepang', NOW(), NOW()),
('images/01JG0WW5KDF4TCBDN61ZCZNQRX.jpg', 'Gunting Rambut', 'Hair Cut', 'Gunting Rambut + Cuci + Hair Tonic', NOW(), NOW()),
('images/01JG0WW5KDF4TCBDN61ZCZNQRX.jpg', 'Inaura', 'Hair Mask', 'Matrix', NOW(), NOW()),
('images/01JG0WW5KDF4TCBDN61ZCZNQRX.jpg', 'Creambath', 'Creambath Treatment', 'Keratin Treatment', NOW(), NOW()),
('images/01JG0WW5KDF4TCBDN61ZCZNQRX.jpg', 'Highlight', 'Highlight', 'Balayage', NOW(), NOW()),
('images/01JG0WW5KDF4TCBDN61ZCZNQRX.jpg', 'Bleach', 'Full Bleach', 'Colouring No Bleach', NOW(), NOW()),
('images/01JG0WW5KDF4TCBDN61ZCZNQRX.jpg', 'Colouring', 'Colouring by Matrix / Ilvasto', 'Colouring by Loreal', NOW(), NOW()),
('images/01JG0WW5KDF4TCBDN61ZCZNQRX.jpg', 'Face', 'Face Treatment', '', NOW(), NOW());

-- Insert prices data for Smoothing One Step
INSERT INTO prices (product_id, price_type, name, price, created_at, updated_at) VALUES
(1, 'one', 'Rambut Cowok', 130000, NOW(), NOW()),
(1, 'one', 'Pendek Bob', 180000, NOW(), NOW()),
(1, 'one', 'Pendek Sebahu', 200000, NOW(), NOW()),
(1, 'one', 'Panjang di Tali BH', 250000, NOW(), NOW()),
(1, 'one', 'Panjang Di Bawah Tali BH', 280000, NOW(), NOW()),
(1, 'one', 'Panjang Sepinggang', 300000, NOW(), NOW()),
(1, 'two', 'Rambut Cowok', 150000, NOW(), NOW()),
(1, 'two', 'Pendek Bob', 200000, NOW(), NOW()),
(1, 'two', 'Pendek Sebahu', 250000, NOW(), NOW()),
(1, 'two', 'Panjang di Tali BH', 300000, NOW(), NOW()),
(1, 'two', 'Panjang Di Bawah Tali BH', 350000, NOW(), NOW()),
(1, 'two', 'Panjang Sepinggang', 400000, NOW(), NOW());

-- Insert prices data for Hair Cut
INSERT INTO prices (product_id, price_type, name, price, created_at, updated_at) VALUES
(2, 'one', 'Men', 30000, NOW(), NOW()),
(2, 'one', 'Women', 40000, NOW(), NOW()),
(2, 'two', 'Men', 35000, NOW(), NOW()),
(2, 'two', 'Women', 45000, NOW(), NOW()),
(2, 'one', 'Gunting Poni', 10000, NOW(), NOW());

-- Insert prices data for Hair Mask
INSERT INTO prices (product_id, price_type, name, price, created_at, updated_at) VALUES
(3, 'one', 'Inaura', 65000, NOW(), NOW()),
(3, 'one', 'Matrix', 75000, NOW(), NOW()),
(3, 'one', 'Hair Spa Loreal', 85000, NOW(), NOW());

-- Insert prices for Creambath Treatment
INSERT INTO prices (product_id, price_type, name, price, created_at, updated_at) VALUES
(4, 'one', 'Kids', 35000, NOW(), NOW()),
(4, 'one', 'Dewasa', 55000, NOW(), NOW()),
(4, 'one', 'CC Blow', 30000, NOW(), NOW()),
(4, 'one', 'CC Catok', 35000, NOW(), NOW()),
(4, 'one', 'CC Curly', 40000, NOW(), NOW()),
(4, 'two', 'Keratin Treatment', 200000, NOW(), NOW());

-- Insert prices for Highlight
INSERT INTO prices (product_id, price_type, name, price, created_at, updated_at) VALUES
(5, 'one', 'Short (Men)', 100000, NOW(), NOW()),
(5, 'one', 'Medium (Bob Pendek)', 150000, NOW(), NOW()),
(5, 'one', 'Long 1 (Sebahu)', 200000, NOW(), NOW()),
(5, 'one', 'Long 2 (Tali Bra)', 250000, NOW(), NOW()),
(5, 'one', 'Long 3 (Bawah Tali Bra)', 300000, NOW(), NOW()),
(5, 'two', 'Medium (Bob Pendek)', 150000, NOW(), NOW()),
(5, 'two', 'Long 1 (Sebahu)', 200000, NOW(), NOW()),
(5, 'two', 'Long 2 (Tali Bra)', 300000, NOW(), NOW()),
(5, 'two', 'Long 3 (Bawah Tali Bra)', 350000, NOW(), NOW());

-- Insert prices for Full Bleach and Colouring No Bleach
INSERT INTO prices (product_id, price_type, name, price, created_at, updated_at) VALUES
(6, 'one', 'Short (Men)', 100000, NOW(), NOW()),
(6, 'one', 'Medium (Bob Pendek)', 200000, NOW(), NOW()),
(6, 'one', 'Long 1 (Sebahu)', 300000, NOW(), NOW()),
(6, 'one', 'Long 2 (Tali Bra)', 350000, NOW(), NOW()),
(6, 'one', 'Long 3 (Bawah Tali Bra)', 400000, NOW(), NOW()),
(6, 'two', 'Short (Men)', 30000, NOW(), NOW()),
(6, 'two', 'Medium (Bob Pendek)', 100000, NOW(), NOW()),
(6, 'two', 'Long 1 (Sebahu)', 150000, NOW(), NOW()),
(6, 'two', 'Long 2 (Tali Bra)', 200000, NOW(), NOW()),
(6, 'two', 'Long 3 (Bawah Tali Bra)', 250000, NOW(), NOW());

-- Insert prices for Colouring by Matrix/Ilvasto and Loreal
INSERT INTO prices (product_id, price_type, name, price, created_at, updated_at) VALUES
(7, 'one', 'Short (Men)', 70000, NOW(), NOW()),
(7, 'one', 'Medium (Bob Pendek)', 180000, NOW(), NOW()),
(7, 'one', 'Long 1 (Sebahu)', 250000, NOW(), NOW()),
(7, 'one', 'Long 2 (Tali Bra)', 300000, NOW(), NOW()),
(7, 'one', 'Long 3 (Bawah Tali Bra)', 350000, NOW(), NOW()),
(7, 'two', 'Short (Men)', 100000, NOW(), NOW()),
(7, 'two', 'Medium (Bob Pendek)', 200000, NOW(), NOW()),
(7, 'two', 'Long 1 (Sebahu)', 300000, NOW(), NOW()),
(7, 'two', 'Long 2 (Tali Bra)', 350000, NOW(), NOW()),
(7, 'two', 'Long 3 (Bawah Tali Bra)', 400000, NOW(), NOW());

-- Insert prices for Face Treatment
INSERT INTO prices (product_id, price_type, name, price, created_at, updated_at) VALUES
(8, 'one', 'Make Up', 150000, NOW(), NOW()),
(8, 'one', 'Kerok Alis', 10000, NOW(), NOW()),
(8, 'one', 'Facial Latulip', 55000, NOW(), NOW()),
(8, 'one', 'Facial Biokos', 65000, NOW(), NOW()),
(8, 'one', 'Totok Wajah', 30000, NOW(), NOW()),
(8, 'one', 'Ear Candle', 25000, NOW(), NOW()),
(8, 'one', 'Tanam Bulu Mata', 50000, NOW(), NOW()),
(8, 'one', 'Eyelash Natural', 100000, NOW(), NOW()),
(8, 'one', 'Eyelash Volume', 130000, NOW(), NOW()),
(8, 'one', 'Eyelash Tebal', 150000, NOW(), NOW()),
(8, 'one', 'Remove Eyelash', 25000, NOW(), NOW()),
(8, 'one', 'Waxing Under Arm', 35000, NOW(), NOW()),
(8, 'one', 'Lepas Sambungan', 25000, NOW(), NOW());
