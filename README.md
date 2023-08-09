# Table

```sql
CREATE TABLE `barang` (
	`barang_id` INT(11) NOT NULL AUTO_INCREMENT,
	`nama_barang` VARCHAR(225) NOT NULL COLLATE 'latin1_swedish_ci',
	`jumlah` INT(11) NOT NULL DEFAULT '0',
	`harga_satuan` DECIMAL(15,0) NOT NULL DEFAULT '0',
	`expire_date` DATE NULL DEFAULT NULL,
	`tanggal_dibuat` DATE NULL DEFAULT NULL,
	PRIMARY KEY (`barang_id`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1
;

INSERT INTO latihan.barang
(nama_barang, jumlah, harga_satuan, expire_date, tanggal_dibuat)
VALUES('Sarung', 2, 15000, NULL, '2023-07-21');
INSERT INTO latihan.barang
(barang_id, nama_barang, jumlah, harga_satuan, expire_date, tanggal_dibuat)
VALUES('Keyboard', 3, 10000, NULL, NULL);
INSERT INTO latihan.barang
(barang_id, nama_barang, jumlah, harga_satuan, expire_date, tanggal_dibuat)
VALUES('aa', 2, 1, '2023-07-29', NULL);
```

## Run Composer

```
composer dump-autoload -o
```

## rename file src/.env_example menjadi .env

## sesuaikan data config .env
