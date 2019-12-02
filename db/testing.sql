/*
 Navicat Premium Data Transfer

 Source Server         : root
 Source Server Type    : MySQL
 Source Server Version : 50532
 Source Host           : localhost:3306
 Source Schema         : testing

 Target Server Type    : MySQL
 Target Server Version : 50532
 File Encoding         : 65001

 Date: 29/11/2019 18:50:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telepon` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created` datetime NULL DEFAULT NULL,
  `modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (3, 'admin 01', '085806234028', 'admin01@mail.com', NULL, NULL);

-- ----------------------------
-- Table structure for auth_person
-- ----------------------------
DROP TABLE IF EXISTS `auth_person`;
CREATE TABLE `auth_person`  (
  `id_auth` int(11) NOT NULL AUTO_INCREMENT,
  `id_person` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `token` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created` datetime NULL DEFAULT NULL,
  `modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_auth`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 176 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of auth_person
-- ----------------------------
INSERT INTO `auth_person` VALUES (16, 19, 'founder01', '$2y$10$Kjb3NNKHaXVD31/y3BYWfeYXrCbDFlCZvGOu6WMM9j..HURA3SBES', 'Q3ZMMVFsQk1IaU55MlRLUVViVHNNQT09', '2019-11-03 15:05:08', NULL);
INSERT INTO `auth_person` VALUES (27, 30, 'member01', '$2y$10$Hsb9Q6c.ryeLaTYAHdij1.7bNHSYXH8ebRFMnxtj4iZOPSWhaelxe', 'VmpXalBBdENRR29NZzRGUU43OUQzZz09', '2019-11-15 20:59:47', NULL);
INSERT INTO `auth_person` VALUES (28, 31, 'agencytimang01', '$2y$10$OsNn48Qeiqa2mVy3w.2XWOgZV5kwXKWvGiyKFW6D5QANejNkf9N/i', 'ZDJOaFJHQWRUa1RZeWtlZ1VJamY3dz09', '2019-11-15 21:20:05', NULL);
INSERT INTO `auth_person` VALUES (29, 32, 'FOUNDER01BRIGITA', '$2y$10$MYfAG8kzXKcfcAvE3jDiS.DAfm0Pl/SD/uocSEc.OvGPVzVx.73xC', 'ZmZHWXc0SGIxWnBsK2l5QTFXVkQ3dz09', '2019-11-16 16:54:08', NULL);
INSERT INTO `auth_person` VALUES (30, 33, 'FOUNDER5FELIX', '$2y$10$qC5YaA5xQzxXagu9bDXlLe2MGhZDDtFmHzkBDwnlInF679z3NZOSu', 'OTVEaGtTRC96OTRyQ3ovUVJkVDJ6Zz09', '2019-11-16 16:55:44', NULL);
INSERT INTO `auth_person` VALUES (31, 34, 'founder02awal', '$2y$10$GfJUaoCqws7svPXrmDfj.uL9uEXXpfj7QAbOM.RHsHYonFktpvTXq', 'QTdtamlabzZUcVB2dmFZSXFoWG52UT09', '2019-11-16 16:55:52', NULL);
INSERT INTO `auth_person` VALUES (32, 35, 'FOUNDER3INDRA', '$2y$10$2jcmeipKwZRtpv9kQWs7I.nXcvCjdedEREHCa8.juAQTGlcq2MCiS', 'YkpqUjl0bDlqOTNrcjlvRU1mSnJnZz09', '2019-11-16 16:55:55', NULL);
INSERT INTO `auth_person` VALUES (33, 36, 'FOUNDER6AUDI', '$2y$10$LWGVwZZyba4.pin.oMHXCO5YyZswbB2JGzHc1yGfsk6qvKuCqzTM2', 'YklSWk5LZ1ZpeXhnSXRpay9IdU5tUT09', '2019-11-16 16:56:02', NULL);
INSERT INTO `auth_person` VALUES (34, 37, 'founder4timang', '$2y$10$jR/uVCmtj3MOZYklhCKJ.uwqtNIObvk/3Q5336iEImHfz6nAmxt1G', 'M0dKaEpjRUM5czRyZmFJYm51cmZ5UT09', '2019-11-16 16:56:22', NULL);
INSERT INTO `auth_person` VALUES (35, 38, 'COFOUNDER03', '$2y$10$M7S9Pxi0djB3HDi2ri0TReTQLP.oi3vo/qI9fGNgHOBqvE.Xapeye', 'aUk5TlpLbm9wUU1uVDhGWS9wbVUrUT09', '2019-11-16 17:05:53', NULL);
INSERT INTO `auth_person` VALUES (36, 39, 'brigits', '$2y$10$xgcA.ygb8ZJCQYxT2pegEefTwroo.tTbUEEaWVLfjbjd7jGufXy5W', 'S2trUWh3emVRcGU0VHhPcHhvN2pxdz09', '2019-11-16 17:06:34', NULL);
INSERT INTO `auth_person` VALUES (37, 40, 'cofounder02babe', '$2y$10$H3rPLcv2Rjbq/FVUdwD71O4ayxcwRX.qwbPOc5c0ZyWnAUve.aAq2', 'MTdzMVVNL3ZCWTlWQWRHRklYa3R5QT09', '2019-11-16 17:06:47', NULL);
INSERT INTO `auth_person` VALUES (38, 41, 'cofounder5eka', '$2y$10$Mi/3rKzeh9RtxOodOH1scuFv4DffMN5.4fCnJUwn23oEDwk/NjTDa', 'RkxYQjRFNTFuM1ZINDhrRlhQNXM2QT09', '2019-11-16 17:07:39', NULL);
INSERT INTO `auth_person` VALUES (39, 42, 'COFOUNDER06AUDIIMUT', '$2y$10$EJAlPEvdtQSHCV3Q7MiBJu5GvzpP7lIlRJFCFTXhwqTz/ZTtPD5lm', 'RStwWmQzbS83STNDS29SdnRoZzd4QT09', '2019-11-16 17:07:43', NULL);
INSERT INTO `auth_person` VALUES (40, 43, 'cofounder4dede', '$2y$10$TOyQrs5E2rTMA.Fa6ws9uusqFIB3D9B8knvX5Ju3SbKnQN8Q3pUs2', 'NWxhRWNMZXpxNStSTUVWTFdsRWxLQT09', '2019-11-16 17:08:12', NULL);
INSERT INTO `auth_person` VALUES (41, 44, 'CAROLUS', '$2y$10$VbkKdV3XKbOskfA0TbjCH.Ee0zw3eR4NE6zBn9EMPZ9DrPLNMdUhy', 'QzJqMDdndEdrenJIL1RoTmNTVVNDUT09', '2019-11-16 17:11:17', NULL);
INSERT INTO `auth_person` VALUES (42, 45, 'AGENCY3INDRO', '$2y$10$zR7qb4Z/WtzScP2TrrFk3.uQoIi.Y.nRB5u3MY6lCYgjE6vaFNXQi', 'aktzWUhaOTJGcjF2d3k0VkVaWXYwZz09', '2019-11-16 17:11:29', NULL);
INSERT INTO `auth_person` VALUES (43, 46, 'AGENCY06AUDICANTIK', '$2y$10$xqv7dWVRIrLlYzX9oHthE.cO8rkLrpI1O2jYzHOLXZxXtGwnvYhXO', 'bDljV2FacldWYTB0TllBNEhIVmpVUT09', '2019-11-16 17:13:47', NULL);
INSERT INTO `auth_person` VALUES (44, 47, 'agency02wahyu', '$2y$10$LqMmnTIqhk3j82Ob70ol1e6qwOAoraHz1jUfJ/hQ378j8igtEU8Eu', 'T21aaW96c3haVENaZXUzRHF5SDV6Zz09', '2019-11-16 17:13:51', NULL);
INSERT INTO `auth_person` VALUES (45, 48, 'agency5samsam', '$2y$10$arIYe3so74nPZA/goPdJ7O/fGz84Cthewuj8jW8mDfbQ/zLxj8v4e', 'WkdmZzREaGt1MmRWS0JnY3lRS3ZvQT09', '2019-11-16 17:14:33', NULL);
INSERT INTO `auth_person` VALUES (46, 49, 'agency4gugun', '$2y$10$vYHgGhUbhdU8DlVoeVH6B.jktq06QPqvrWs.Po6Mm991wfaKmKnnu', 'bFZhSzFhRmozVDJocStyS2N1UmpVQT09', '2019-11-16 17:15:09', NULL);
INSERT INTO `auth_person` VALUES (47, 50, 'hestycantik01agency', '$2y$10$adQW/KtyLLjsWZRQsNBU9.NDQT.V9ezzBOt/MtUOASYKuYtWaGnti', 'clgvdUZxSmE2d3F0czZPdUp1YnlWUT09', '2019-11-16 17:24:51', NULL);
INSERT INTO `auth_person` VALUES (48, 51, 'member01there', '$2y$10$PRs4bsriS79.EW2GOckhJ.aO2DgTDO8yRxS3cu0Ne/vDDiIB.RBxi', 'UDVlTnFLUTJMcHZaOTQ1eVU2MndUUT09', '2019-11-16 17:44:29', NULL);
INSERT INTO `auth_person` VALUES (49, 52, 'ANDRI', '$2y$10$c.ohPEFahiYQite4fTgE..pTIPM5uiMcaYqFzIY4wYSu1F6sCKxZW', 'Sjl2cW9jZkx2bXZuZEdGRTFjQ1FiZz09', '2019-11-16 17:44:39', NULL);
INSERT INTO `auth_person` VALUES (50, 53, 'MEM02', '$2y$10$HKUJYhUN7rSTxO3J3jK2EenXKNXlQ5W9iSz72fPkdXpsKhDs04VaO', 'UHpVS2ovU09SWUhXM3hDRUYzK1g4Zz09', '2019-11-16 17:45:11', NULL);
INSERT INTO `auth_person` VALUES (51, 54, 'mem05penns', '$2y$10$Yb0YKTK2hVzZkYZpqEwJO.UwxWZE5SIlUP3Vdw6mizsD5UIgQ9p26', 'T2x3QXczK2J6NXVaaHliMUpabitQdz09', '2019-11-16 17:45:17', NULL);
INSERT INTO `auth_person` VALUES (52, 55, 'MEM06WELL', '$2y$10$.9d2whdPy/XLwrZ6j65RHOQqbBg5hn.uH19CDU23giUjzGtlbdKvu', 'Wnc0YTRjUTVBVXkxeERKd2VZN1pBdz09', '2019-11-16 17:45:21', NULL);
INSERT INTO `auth_person` VALUES (53, 56, 'mem4gigi', '$2y$10$kq0eGLPrw5LvwOMh2PzsoOI86x0wcuNzrLhEyCFb4TQst5/nucQFe', 'V1J6OStKZmpzNW84TituSVRyNFJNQT09', '2019-11-16 17:45:38', NULL);
INSERT INTO `auth_person` VALUES (54, 57, 'FOUNDER', '$2y$10$uA42ILOjZZ1ZTsNzerzl4envo.MAifQQxwcfF90Hs6ag.pQowXEaW', 'dnpjR2NxaXB6TWdML1pzNzMxZjArdz09', '2019-11-16 19:15:48', NULL);
INSERT INTO `auth_person` VALUES (55, 58, 'founder12kaka', '$2y$10$e6ZZU8c.H4ccpRd7dkII.OoA.8EI4H0yQgZwXkSX47jgpWmLTbVyu', 'eTZqYmZWSko3L2IzWStUcVkzQ3pOUT09', '2019-11-16 19:17:16', NULL);
INSERT INTO `auth_person` VALUES (56, 59, 'afandi05founder', '$2y$10$a9axzWzRNPRFsDx1Embvbujme0GzQ0rZImzYq6OvRy3sLU4nxnrlq', 'OWlBMzNjOWg3cFdodlRPQ3NIbEtTZz09', '2019-11-16 19:35:33', NULL);
INSERT INTO `auth_person` VALUES (57, 60, 'COFOUNDER06', '$2y$10$.yyILyYgr8fRofWdr65PBOQSUM2KFQvML9ECxOe03t15f.r1M5b76', 'SFIzRkdtejNSUjlGWXE5ejMvRFduUT09', '2019-11-16 19:36:56', NULL);
INSERT INTO `auth_person` VALUES (58, 61, 'cofounfer12kuku', '$2y$10$glJbC1E9GfS5nedULi8mbeMyehHIcWwarGRQb5jXy2N6bf35FtQoq', 'dmNXM0c3SzhqVFZPS0l2aitSSXhwdz09', '2019-11-16 19:38:45', NULL);
INSERT INTO `auth_person` VALUES (59, 62, 'cofounder05vira', '$2y$10$nxhZsa8olvs2fLCbg/MEJ.vPVVzUBM0TwnwWtkcdIx9cPMLuJG6J6', 'MWlvZFJ3YU5GZ3JVQ29rSUV3cDdFdz09', '2019-11-16 19:39:43', NULL);
INSERT INTO `auth_person` VALUES (60, 63, 'AGENCYESSE06', '$2y$10$jrQvnu5/OAJw32mMAKnbFOmxxbdGVSeNRXqxMeoU4n79VCeQYVsGK', 'Q3MwTnErL1E5dW1rUitWbFY4aTN0UT09', '2019-11-16 19:40:49', NULL);
INSERT INTO `auth_person` VALUES (61, 64, 'agency05ida', '$2y$10$7yXTOnykvEPu2iw2WWQYqe63ubYqCD9IN..uyWOzEk1aZtkdyJZeu', 'QnJiNSs1RUU4SlB0eFlWZ1pmbDFUUT09', '2019-11-16 19:42:56', NULL);
INSERT INTO `auth_person` VALUES (62, 65, 'agency12koko', '$2y$10$Drc4jlyIJ.aI/QtH5ACmpe/tvRwZN6sbh55jZJvyZFzZwsfCDl2ka', 'YzdFODVFdEFrcjdKUWNqNlNjYmlkdz09', '2019-11-16 19:43:16', NULL);
INSERT INTO `auth_person` VALUES (63, 66, 'FransiskusBokko01', '$2y$10$Mnc84I5FUun1CNACPtvz2.Lwt.O2c8QWPe07qLXVFMMbTLendnBwu', 'UDZkTE9xRjlIQ3A0cUI4ZG42c3V1dz09', '2019-11-16 19:44:01', NULL);
INSERT INTO `auth_person` VALUES (64, 67, 'mem12kiko', '$2y$10$lL.D930o7FLrQ6y37UIuFufavRft1erHM8RMIkUm6bqbdpeMP4Txa', 'TDZkNXFNbnhKb1ZCWnRocVhYUDAwZz09', '2019-11-16 19:49:42', NULL);
INSERT INTO `auth_person` VALUES (65, 68, 'MEMADELUPA06', '$2y$10$8iNiAbQgXZ0v0IyVzc6Kyuqw.LgikCiVMrDTKCCo1/aqVXIYnL9aW', 'K1dOZVBiTi9telRaVld2alR4ay9Hdz09', '2019-11-16 19:50:11', NULL);
INSERT INTO `auth_person` VALUES (66, 69, 'mem05samsam', '$2y$10$GVyLSXNGQtti2gQg1MtlkO7mjN4hVBGjvFAi9ouCmAX7YTANn7iaO', 'dGZKK0pRR1F0MnpTNFFmeVdIY2N5dz09', '2019-11-16 19:52:18', NULL);
INSERT INTO `auth_person` VALUES (67, 70, 'SESILIA01', '$2y$10$FuLVhi7BOH5NmuqfjNhpbuWDGe7xH8rXchaJQsEG97TIbIupYri8C', 'c3NJbVNBM01SdERSRmoyd3o0bEx3dz09', '2019-11-16 20:07:20', NULL);
INSERT INTO `auth_person` VALUES (68, 71, 'indra22', '$2y$10$CkbgwdqJtGz3N0qaTh7OxOxdHuo.WbOR/slopV42bRQO/h8P8r91m', 'RDYrb2Z2a3pZZE5pQzBJV21QcWRWQT09', '2019-11-17 02:06:16', NULL);
INSERT INTO `auth_person` VALUES (69, 72, 'Rafael01', '$2y$10$4V42ALduupV797u9SwDRBuW5GLeqmTYs/VMAsxbJfB153Gw8ZqlDq', 'aWRHNThLQjdQRWRuTTdnZWpCTXp2Zz09', '2019-11-18 00:07:24', NULL);
INSERT INTO `auth_person` VALUES (70, 73, 'suardiring01', '$2y$10$iYu8XXcT6.ZPFfth6lT8ouCzpD.NUvsoDQ8taU2U0fxySmg7OFMK2', 'Z1dvSHJmYnpENkVlbTYwb0V6dnNxdz09', '2019-11-21 02:03:23', NULL);
INSERT INTO `auth_person` VALUES (71, 74, 'DEWAFOUNDER', '$2y$10$yPDuy4tjW4pcF1nQvLDmauqIePr/.ONLxmHIZFr4zGA2ZyUJMMOKe', 'V244TVEvSmYzTGh2anJzK05nVjdVQT09', '2019-11-21 02:58:24', NULL);
INSERT INTO `auth_person` VALUES (72, 75, 'INDRAFOUNDER', '$2y$10$pNj0nDnrWM3mOWrIAzABteztiMV6gm0MdR5FbcgouxhFtNoJic4O.', 'WE1WWXJ1aSsrbGxMQ1Z1Q0Y3UXRnUT09', '2019-11-21 03:02:52', NULL);
INSERT INTO `auth_person` VALUES (73, 76, 'IKBALFOUNDER', '$2y$10$Vwd8CzYGi/5mLk8hSPIaAOOw6mf33sj2R16MMmUGxevAh3eIQg.aS', 'SlRhdGVRZWVTSDlpeDhTS3ZMbG9TQT09', '2019-11-21 03:06:09', NULL);
INSERT INTO `auth_person` VALUES (74, 77, 'SUDIRMANFOUNDER', '$2y$10$da734zO2wyUt0G0JvgoRI.UF7zZL7e4GyzULyqfwqwqyzZnxryzxW', 'V2tWRHJMdGtzeUxSTFVUeTF6dzhXdz09', '2019-11-21 03:09:11', NULL);
INSERT INTO `auth_person` VALUES (75, 78, 'ACHMADFOUNDER', '$2y$10$cuvuHJ1krOhUFYMZg5R7KuUQmgDv75EsMKkBn/sOD5FJgO1YbJoS2', 'Q3NNL1VJNTUza1N1c3BJNlAxVFQzdz09', '2019-11-21 03:13:30', NULL);
INSERT INTO `auth_person` VALUES (76, 79, 'TRIARIFOUNDER', '$2y$10$fM/RkMwrkg1Krjb7QnXv8umvmSSuatM26rvIWpNQblCr1J9S0rugq', 'ekZXZFEzKzJYQi8vMjBJQ0s4VjBuQT09', '2019-11-21 03:16:45', NULL);
INSERT INTO `auth_person` VALUES (77, 80, 'CHEETAHFOUNDER', '$2y$10$HCbCj5PPQpeVwcd0q/.lIeeG4QafWb8Ko0i6cm3csYm6Hdzl1posq', 'czQ0UGNQL2twVDRCbzFTaWkzbmlFUT09', '2019-11-21 03:34:28', NULL);
INSERT INTO `auth_person` VALUES (78, 81, 'HEROCOFOUNDER', '$2y$10$7UTBPuiYpZgu.VdBM0cBr.a3ld5f1rMsSfNUPcUkGUseaNX.EBc26', 'ckhGbHFCdXJydnR4RXV1LzNxN01NZz09', '2019-11-21 03:52:50', NULL);
INSERT INTO `auth_person` VALUES (79, 82, 'SRIWANACOFOUNDER', '$2y$10$VkzBPHlcmt.yOvF.MGcaIuUlcAetUlzOVwxfNA8rOlaizbixhSzJ2', 'S0lXUGJNVFlHUkFNa1YzODlVa2g0QT09', '2019-11-22 01:58:58', NULL);
INSERT INTO `auth_person` VALUES (80, 83, 'SUARDICOFOUNDER', '$2y$10$8P84EfDN0xsDKJUMME2QQuiitH/0SHy2wVi5VpMaIi2Ml/1w1kc7O', 'SFpTRTU5SmNDZ3IyblZRV0pmYnBtZz09', '2019-11-22 02:07:56', NULL);
INSERT INTO `auth_person` VALUES (81, 84, 'WIDYACOFOUNDER', '$2y$10$Y3PWolbSF9hchDsgOZnpneth3dSa7Gbs4ovlltb29vuH/Kj9rQhLe', 'aUVYZnNFeEdidkRydTBNQ3NuSUFBUT09', '2019-11-22 02:10:26', NULL);
INSERT INTO `auth_person` VALUES (82, 85, 'EKOCOFOUNDER', '$2y$10$A0mOoU6jtK2X/7ervkaJyuHTf4gJyJyY4bSJ4/.7hJSJqP4QzrHxq', 'dUNGU1pJdHl1VmRYcE5PMmxhanlqQT09', '2019-11-22 02:13:42', NULL);
INSERT INTO `auth_person` VALUES (83, 86, 'SOLEKAHCOFOUNDER', '$2y$10$J50eKC0r09aNJUWf1hGpiOhPcj2UDXAdlD/KK6Mc8.BUtqtKD.vO2', 'NVliY1lLSjNUWktsKzNiNURrTWdQZz09', '2019-11-22 02:16:24', NULL);
INSERT INTO `auth_person` VALUES (84, 87, 'TASWINCOFOUNDER', '$2y$10$5S2ObOArTaCelw9esZELPOszHHLRWneeyYD67pzyHf2boyTuw1l9S', 'c2huaW9mWUZ2amlicWtoNTRxbW83Zz09', '2019-11-22 02:18:38', NULL);
INSERT INTO `auth_person` VALUES (85, 88, 'JAMALCOFOUNDER', '$2y$10$/avhi3y2Jx5oKeoRov7CbOfsltv.avF.z7TQQ6Ay0l3P0bVKhAiT2', 'NS8xWTNXUGVSL2RtWld2M0k1Wkh1QT09', '2019-11-22 02:20:41', NULL);
INSERT INTO `auth_person` VALUES (86, 89, 'RIBKACOFOUNDER', '$2y$10$3Wl2Fp1MSUk84oT7OhSUE.BkCQO0AywUX4BHIxQI3BX/TLgQy2aiy', 'eXVOR2xyV0FNRVQwaTNtT3RieXVUZz09', '2019-11-22 02:22:19', NULL);
INSERT INTO `auth_person` VALUES (87, 90, 'MARDIYAHCOFOUNDER', '$2y$10$yKCs77Ax4odwxd36Ue4t4uiPiRWQrNCqQO7VIvqXalgqDZ9GyYYle', 'bzVJM1FodlpVeTV4YkJYbThXMExIdz09', '2019-11-22 02:24:18', NULL);
INSERT INTO `auth_person` VALUES (88, 91, 'RISMAWATYCOFOUNDER', '$2y$10$sZXFADX5.tDRm3LLsoKMze5B/k88iyGy/bY6S2062MxE/OSQGJm/C', 'VnVzVWIvS3RDbVEzQ1NiZHN4NFZ5QT09', '2019-11-22 02:26:48', NULL);
INSERT INTO `auth_person` VALUES (89, 92, 'DODYCOFOUNDER', '$2y$10$mD3vycIJyr10q2njXZ3t5OuNydTr2MSLNUkdCds99WffxiaCKB0n.', 'c1FoK3FUa1lxMk4yT2pXTUozTlZ3QT09', '2019-11-22 02:28:53', NULL);
INSERT INTO `auth_person` VALUES (90, 93, 'YUNUSCOFOUNDER', '$2y$10$NU7FTeneCmyVndHB3sE8QOMY4RzhwgXrKwssX1QlJepwxh/sf39mO', 'dEtkbGhiOW1tQW1nSXBLdThRazdEdz09', '2019-11-22 02:30:45', NULL);
INSERT INTO `auth_person` VALUES (91, 94, 'YUZAKCOFOUNDER', '$2y$10$VwInc7MBfWQypEqN8oi/U.nyuwgfFEk1SSfwmqhnz.fSKG9pLDnC2', 'Nm5Kc2hNOU5xNy9JQkpnNWdaenlidz09', '2019-11-22 02:33:01', NULL);
INSERT INTO `auth_person` VALUES (92, 95, 'NURSINAHCOFOUNDER', '$2y$10$K5x0UNA/RHlUi7r/gfsjfO9/InjOXlB95hfMfG7w5WXdGT/YjjqDq', 'aSs1ejJ1K3Ewcm4vSjFBemNkUnR2Zz09', '2019-11-22 02:34:40', NULL);
INSERT INTO `auth_person` VALUES (93, 96, 'ROSICOFOUNDER', '$2y$10$NIlWS1FkS1hmkxj.hrpmveI8LknjmNUBQaWlCMDw7OzheJY9QyG0S', 'RGFYT210d1p3Q3c2Z2JUcjZHU0xDQT09', '2019-11-22 02:37:04', NULL);
INSERT INTO `auth_person` VALUES (94, 97, 'AGUNGCOFOUNDER', '$2y$10$bQK/bzE5/pR0l3hZpghIsOcE8N3fWDcZ89DxJyM3IlUAbVu1TLnfG', 'NVhsd1RhcE1WMEd3VUJvTUs1ajczQT09', '2019-11-22 02:38:42', NULL);
INSERT INTO `auth_person` VALUES (95, 98, 'FRANSCOFOUNDER', '$2y$10$rHMvwQZJdOFKn3tYn5BcXuKx.LpJK.bpI/hCGZaM9qoL6VRN/6Mf.', 'Ykw4UVVna09yajBrZzNGbytBVE5VZz09', '2019-11-22 02:43:34', NULL);
INSERT INTO `auth_person` VALUES (96, 99, 'HANZAHMJCOFOUNDER', '$2y$10$TSzceFo1.kqAdnj0Acns/ejC15juLSmzIlZwOmxSQh1kkk44R9Cyq', 'Zk5DNUVhdDYwNFh0MEpUb280NHZNdz09', '2019-11-22 02:45:18', NULL);
INSERT INTO `auth_person` VALUES (97, 100, 'KIKISINTANGCOFOUNDER', '$2y$10$ROSF3PDQca/3jST188Sj2egHrA7KdU6lD3n4OLMmDmX42eLtCYqMa', 'RFRRRkpTeWlhNHV0UkNUUzJMY2MwZz09', '2019-11-22 02:46:57', NULL);
INSERT INTO `auth_person` VALUES (98, 101, 'DAMARISCOFOUNDER', '$2y$10$avH6.caRHvNlFmS4uSwmqOwf0bRLPoYhG1HzJazWW3wM3/Z6vaOmq', 'SUxhVTRTalBFWW5RQk1wNy90S2JSQT09', '2019-11-22 02:48:53', NULL);
INSERT INTO `auth_person` VALUES (99, 102, 'VERONICACOFOUNDER', '$2y$10$bwpz8nvv3v/b0J1LQdZHMeNpKMt2J4qw6ExwA9.P.NyDryGwqpe/2', 'L1FnWWRCb3dHZklFd0pwWEVwTmFhdz09', '2019-11-22 02:53:13', NULL);
INSERT INTO `auth_person` VALUES (100, 103, 'JARWOCOFOUNDER', '$2y$10$0RenJdwgD5A7HVDFqXuOi.Tl2/q7KkXUwX3SAU9eJzWYHJ.yKXHvO', 'ZkhxNmlPbDZXS0wvY2dSNFgwVEJMQT09', '2019-11-22 02:55:15', NULL);
INSERT INTO `auth_person` VALUES (101, 104, 'HAMZAHMKSCOFOUNDER', '$2y$10$ae4/e3e5uQtA4Pmd2xWWCueFWaBqBnkG9Vj7dAXiclMq7u73KJR2C', 'Vk1NODNsa1VqUWhnSytKK2dtYUlNZz09', '2019-11-22 02:57:00', NULL);
INSERT INTO `auth_person` VALUES (102, 105, 'SUAPRDICOFOUNDER', '$2y$10$xzebpI3lNVRSG4wcFSXmbuj0AJputf0NP7YVPFlZHsR7tUGRNY6ty', 'MnRtMWxlSW94S0JsVEJ2RVVPZUR2UT09', '2019-11-22 02:59:37', NULL);
INSERT INTO `auth_person` VALUES (103, 106, 'ALFILCOFOUNDER', '$2y$10$7kDaHMoKLQZCQnMYIDWQeO1IMvIDcDnXJwmhzwGM9rWr2dsoY22Ii', 'S3UzV1hrZ1pMTlV4YnBnRThNcnRaZz09', '2019-11-22 03:01:10', NULL);
INSERT INTO `auth_person` VALUES (104, 107, 'YUSUFCOFOUNDER', '$2y$10$ruVFvAY5UOx0VLLkgy4/NePSMQZgc6sx4gDlm5ht7GxHpeaIfRYFm', 'd29iUjZXRDJsa29DUmY2ZXZ3emxkZz09', '2019-11-22 03:02:38', NULL);
INSERT INTO `auth_person` VALUES (105, 108, 'RIACOFOUNDER', '$2y$10$x2D4u6GVIJE8c.BjxYVR7uMdxeZ14Tg0DH3EPdsz1KARSGMSurzwK', 'bmJaR0hydm1PKy9VQVVyOWhtVi9tZz09', '2019-11-22 03:05:20', NULL);
INSERT INTO `auth_person` VALUES (106, 109, 'UNANGCOFOUNDER', '$2y$10$Zh2yFRtKwwALNLsNq9Ipe.wbRKssxW9c1LWNb913FbbnUFJ8RESZm', 'ZWN5dTJEUm5hQVJ6aTRweHVkTEkvUT09', '2019-11-22 03:06:55', NULL);
INSERT INTO `auth_person` VALUES (107, 110, 'EVACOFOUNDER', '$2y$10$L5WaK2Z9.y2An19amqDB8O1WDW.wRv3dqAr2prpFiLR.vMCUn0HBO', 'VXJFTncyZnlCUnVrSGdsOHBVQmo4dz09', '2019-11-22 03:09:21', NULL);
INSERT INTO `auth_person` VALUES (108, 111, 'CHAERULCOFOUNDER', '$2y$10$WKn1zMB4ffRIaDgVHW9tqud5gVfftUUw9gwQRa1KXuRnNwvNdzhRK', 'Q3FKTjFoSXpoVXpxL1RRWTJxdlh3Zz09', '2019-11-22 03:10:48', NULL);
INSERT INTO `auth_person` VALUES (109, 112, 'SARICOFOUNDER', '$2y$10$slMqnsrA.7aMrCnt6Piypuvcf5RFau2W9fBNIKXVDmtvvnHbpZNWe', 'K3BhSlhJNnhqcFFHSThyRGxmOEtvdz09', '2019-11-22 03:12:19', NULL);
INSERT INTO `auth_person` VALUES (110, 113, 'AWAL01', '$2y$10$YtnTqsi.ckYVCVj8iDohHOkFHDplQXGy8QpHXAQUVuFVfjK3tmhG.', 'R3UvVzY0a0R4eGNORUJTb0FMcnd5QT09', '2019-11-22 23:51:36', NULL);
INSERT INTO `auth_person` VALUES (111, 114, 'MARLINAFOUNDER', '$2y$10$qGReIJxDom8mfnkFdAyScO.S8apUHCnIAS/3WgLRFcycD5vVC7NP.', 'dlExYks4enBCMzE3SUhqSEtEclM1Zz09', '2019-11-23 14:27:19', NULL);
INSERT INTO `auth_person` VALUES (112, 115, 'FELIXFOUNDER', '$2y$10$ZnOx7BlyGU7vXD0Qo5v6peqyxes.UcQT89VpgJ2HXufdM7UZk7aIq', 'b2I5c3hrMGxWT2Rzb3VnbUtraDZnQT09', '2019-11-23 14:30:15', NULL);
INSERT INTO `auth_person` VALUES (113, 116, 'EKAWANTOCOFOUNDER', '$2y$10$CsZUFMAg/oLnIAPBYcjR3eVaoyoFw1cNqY0wHEM1UtseRVt7IJb6K', 'alFmb2tSYzVNVFE3K2lnazYwK0NhZz09', '2019-11-23 14:42:42', NULL);
INSERT INTO `auth_person` VALUES (114, 117, 'cofoundermarlina', '$2y$10$bsnTsVJnHLV0TPs5/f2gB.9mDmbN7ustEP.4sBv4zo5X0cimUgIvS', 'WXo2RGZlQmxaek1wdDB6b2xLdTNHQT09', '2019-11-23 17:30:32', NULL);
INSERT INTO `auth_person` VALUES (115, 118, 'cofounderindra', '$2y$10$z4POJUqK8s1mNf7xixYHu.bZY5n842eF2lnYz2VR8ywGMhuD9GVOG', 'Q0dwNFF0MHNjMVAydTlEMHFhZnJnQT09', '2019-11-23 17:39:08', NULL);
INSERT INTO `auth_person` VALUES (116, 119, 'cofounderfelix', '$2y$10$63beqP7LVsMPcbKNBT8YrOYM9ZwooKGYeT9tUg72LAGKRegq9unrO', 'aGlWejhiUVJUTHRBV2NMcmNZa0tqdz09', '2019-11-23 17:42:40', NULL);
INSERT INTO `auth_person` VALUES (117, 120, 'agencytesting01', '$2y$10$6mXOTUoFqglzkxQhgTDgWOOhdh5/f.WG6DaH63unbxp.LUXx.MLP2', 'TW1GYzl2QlRsRzI3YnpYRDMwaEt5UT09', '2019-11-23 17:53:15', NULL);
INSERT INTO `auth_person` VALUES (118, 121, 'cofoundertriari', '$2y$10$ITLhaz7UQ3Tz68bYCQD5je60kzEI.167MTGmLF/rL8TP0Cb9vNNcq', 'TGhzcWVXbVVYYXNPdWJhZFdTK2c3Zz09', '2019-11-23 18:09:08', NULL);
INSERT INTO `auth_person` VALUES (119, 122, 'cofounderachamad', '$2y$10$NWqD.xy8jNhfty/.gNDbOePDm8JWGA.AWm/HmKoam.z3WjenCfLbu', 'YnAzUktFYkgxVEF0cXBrcVExSUtzZz09', '2019-11-23 18:17:35', NULL);
INSERT INTO `auth_person` VALUES (120, 123, 'agencyakbar', '$2y$10$qwGLTwMVEUhMbjs7jRMqVuYUUaLpYifU2zVAIRZOWL3eCOn5e3.Nm', 'R3loMzQvcWpESEZVZ0VFa3BEaUZMZz09', '2019-11-23 18:23:45', NULL);
INSERT INTO `auth_person` VALUES (121, 124, 'cofoundertimang', '$2y$10$MuFw7.WgDt3fjF.cb0WKDOwLcuNdLQU9Ct9Mvw1tDJL5C5SaAeRMG', 'R2djRXFvRXJCTmZuTlc5UnR2SWhZdz09', '2019-11-23 18:38:23', NULL);
INSERT INTO `auth_person` VALUES (122, 125, 'agencymuhammadvirgiawan', '$2y$10$nVzEPADhX98jmdYZVXnD0OKfiyr0t4l6hsxiLWlUxxGDmGAKbiXCS', 'bkM2c2R3U2Z1RzB2L1czV0ZpOEJydz09', '2019-11-23 18:38:30', NULL);
INSERT INTO `auth_person` VALUES (123, 126, 'agency01wahidanur', '$2y$10$YIJlGG7nGphA/U.IPvemVelgVfaPwGjfPiGGokxYpqDCwNs.m8uTW', 'V01oaXdnS2NTbHVsbXp4VlRZcmNsQT09', '2019-11-23 18:42:09', NULL);
INSERT INTO `auth_person` VALUES (124, 127, 'PATRIKGIRIKALLO', '$2y$10$WPVsWWf4qHjICSGhCBHObOwympwhmOd5Ym8btI66ARbTAQsRJyhCa', 'MmNnUXZrU1g5bWRNZERqMW9rUzBFUT09', '2019-11-23 18:42:50', NULL);
INSERT INTO `auth_person` VALUES (125, 128, 'agencymulyansyah', '$2y$10$rGlFGdS3VSutUV6aifx02.FyxuDvNfuZyd2HGTSN4AezYqXlzldBq', 'RFJ3Z0NIVnJYQXc0dElvNmJWdnFLQT09', '2019-11-23 18:50:17', NULL);
INSERT INTO `auth_person` VALUES (126, 129, 'dewacofounder', '$2y$10$3twlPToTO4y8MTINyxeN9ebYDVa7DmV6QyQ.l3RHusFZIhLAxfMee', 'NENpOURYei95bjZpbzhhekdMUXgrUT09', '2019-11-23 18:51:15', NULL);
INSERT INTO `auth_person` VALUES (127, 130, 'AGENCYJEAN01', '$2y$10$G9PE9Uf066OV5VJMNsJM4uSaqSzpBI3tz2rkog4MPSb/pgxnTIR7u', 'TnRNOHI5QUErcFBCYmxTWVRyeW9GUT09', '2019-11-23 18:53:34', NULL);
INSERT INTO `auth_person` VALUES (128, 131, 'agency02hjsyarifah', '$2y$10$gWlvNvUuxu/whGAYzozTG.VT.up35F.KaTuibdbdPvumaF8qGMb6S', 'QUlSL3c5QjcvY0JyeEg3V1RGRmxadz09', '2019-11-23 18:56:58', NULL);
INSERT INTO `auth_person` VALUES (129, 132, 'agency02hermantosteven', '$2y$10$SKxbfKpO8hvM0U6WuCYgJeq6q/vfMEGbdof/gAY2OABX41DreoWTi', 'czI2djhIcUwya1VhQXVmdXdpdXBqZz09', '2019-11-23 19:05:02', NULL);
INSERT INTO `auth_person` VALUES (130, 133, 'agency01wahyu', '$2y$10$9tRgoJNMVJiPeM6JVMisduOg3zvksOg2LI9NgObJfzbC2iWZZBDBe', 'TVhqSTZiWXZHNXJQa2R5SEJGWTVvQT09', '2019-11-23 19:10:37', NULL);
INSERT INTO `auth_person` VALUES (131, 134, 'agency02farisabelly', '$2y$10$H6AV83X1KOrupWqhNlNL5ezJNVxMvYcJZdgQ0opStSBSu00opqPyy', 'ZHRRNnVPU0IreFBPaEQzQWFuVHpoUT09', '2019-11-23 19:11:05', NULL);
INSERT INTO `auth_person` VALUES (132, 135, 'AGENCY01SALOMBE', '$2y$10$jz/z4pKta3ANClPoJz/KgOpEoGggcr1YW9XKshRNGNBffvwBV3ZZS', 'L0RGaDFaSy9CYTcwZ2Y1a1loVnlidz09', '2019-11-23 19:15:56', NULL);
INSERT INTO `auth_person` VALUES (133, 136, 'Agency01fatmawati', '$2y$10$C20vgxQsS6Xp8gaXBrLYxuDx079yA2d.WzQNLTRxDjBHiTgjBUmxW', 'akRWcGhOWmVmRVFWa2JrSXNNTXd4dz09', '2019-11-23 19:25:42', NULL);
INSERT INTO `auth_person` VALUES (134, 137, 'cofounderwilliam', '$2y$10$RbBFBcK/32/J.nYmbML1i.x5nlORlE6pVX9URdyxWhg7kjfedat9y', 'SWVzVDNXWXZocktJOXErQzVmUm1RZz09', '2019-11-23 19:28:03', NULL);
INSERT INTO `auth_person` VALUES (135, 138, 'Agency01eko', '$2y$10$7YiicKCPyklw3rlTmgrOZucaIS2lsaKGhIHKlYkxG8uUfgy1/Nu.K', 'dTFvSnJGS1R1NFBva0JaUmcxNi82Zz09', '2019-11-23 19:30:07', NULL);
INSERT INTO `auth_person` VALUES (136, 139, 'agencybambangprasetya', '$2y$10$93XJ9N2QR1iyoNLwxFXg.uVGi57VIVWve8RSTr0HrY7S5a0QC4gTG', 'R2ZLWUhQWTNzclpRVXVMbDR4YWFDZz09', '2019-11-23 19:34:26', NULL);
INSERT INTO `auth_person` VALUES (137, 140, 'Agency01dewa', '$2y$10$0V0VJfxkeHR.7NEUAn0LeeBBXWbnUx75rKrnIat3Dz8UAW5VClbeC', 'ckRiZ29UejlVN1lObTFrMGR0akl5QT09', '2019-11-23 19:34:28', NULL);
INSERT INTO `auth_person` VALUES (138, 141, 'ASNITABARAAGENT', '$2y$10$GZgCSEQdmdjyxCoMIdedYuMkg6NIRgNFfDgEDs74Uuo0KycjURme6', 'WG8veGVHVlQwcTU0YmhJczJ0Y2ZEUT09', '2019-11-23 19:38:25', NULL);
INSERT INTO `auth_person` VALUES (139, 142, 'agencymuhfirmasyah', '$2y$10$m.ycV44dfvRmcz436dQVPeKq7lcX4Tu4vPVLxmkPL1QNEG1KGpiQy', 'cElqT0dvbnByWEJhVW53WXc5QVVhUT09', '2019-11-23 19:38:47', NULL);
INSERT INTO `auth_person` VALUES (140, 143, 'agencyikbal', '$2y$10$1sKS/D.P27DToekSsLYBe.GUxLB4ObUDhYBxdyBRgivq5pMSNQff.', 'eHl0bnBmSHp5MDZYU2o1aTJxZktwQT09', '2019-11-23 19:42:44', NULL);
INSERT INTO `auth_person` VALUES (141, 144, 'agencyettypermatasari', '$2y$10$ykx2O53i0W412w5duV2wu.XWaIV6ktFbArdCK1WYCqJbgagds70Hq', 'cUo1WlA5WE9xTFJrRjl5OGZpRFBCQT09', '2019-11-23 19:45:24', NULL);
INSERT INTO `auth_person` VALUES (142, 145, 'agencyarini', '$2y$10$okwxkut/IR/XjHFMMfkcoONjPJy8yOC.NrGlw0dGnWBWSEPi2cRSe', 'U3QycXFaMWhZbm42eTc2c0tIZjYrQT09', '2019-11-23 19:46:12', NULL);
INSERT INTO `auth_person` VALUES (143, 146, 'Agency01Nikodemus', '$2y$10$SbJj8Oecqml5VbgRqmVDIugBKH.NgwtfI9PlxuGFLdrflosZPp0hi', 'd1I2VUpDaXlNWXl6SzlEZkdhWFlLZz09', '2019-11-23 19:47:29', NULL);
INSERT INTO `auth_person` VALUES (144, 147, 'agencyroswaty', '$2y$10$qC8xU846rV360LfXnjcjYeUggO2NixkoaMhTiJigk5kvL1iCKXmDW', 'bzdSNjliQVVRNXNOZW1HbFM5WmNJUT09', '2019-11-23 19:48:48', NULL);
INSERT INTO `auth_person` VALUES (145, 148, 'agencydanielaldaniumboh', '$2y$10$FGWEhksv7bX1BG6i9.30zO7eBxTpAPyu3qi.3wkSeNo7XcUNuBgJ6', 'bG1Cc2tYV1M4NWlRRTJXdVRNbFg5Zz09', '2019-11-23 19:50:05', NULL);
INSERT INTO `auth_person` VALUES (146, 149, 'AGENCY01MAEMUNA', '$2y$10$uUuo.FgVFS8HIUrE7ZcKb.XAf2fmWRPTpWJwc7vtj.X3K1kgqdAri', 'UmlxTlRXV0xFNnhuNHRVTnJMYzJnUT09', '2019-11-23 19:50:44', NULL);
INSERT INTO `auth_person` VALUES (147, 150, 'Agency01muhammadthaib', '$2y$10$uQabu3AZF5/yuJILBRAnIuZWvHR22Sbi3NG3Q/3n/PL8HV1TFzkFC', 'd2ZNMHYyOS81bFpacHBSOVRhWGNmdz09', '2019-11-23 19:53:16', NULL);
INSERT INTO `auth_person` VALUES (148, 151, 'agency02apnerkristian', '$2y$10$lyXYZ8RM3vdJzy.nWii5le3JlEJJA3aLdJC2XevmPArtnW6.goGfC', 'VG9LKzc5aEVRK244c25IbGJhNlRjQT09', '2019-11-23 19:54:50', NULL);
INSERT INTO `auth_person` VALUES (149, 152, 'agencyahmadibrahim', '$2y$10$p2L95nUVQFcZjdPBKu6iKuYmZq86y28yI20w4nICj6Mt9q7HJCNJa', 'NXJNTmRqcXg2U05qbUN0Z2ZObzhpdz09', '2019-11-23 19:56:10', NULL);
INSERT INTO `auth_person` VALUES (150, 153, 'AGENCY01RIDWAN', '$2y$10$UG7oj5rHqOyK7tg2Y/tZ6O5fle8uWyMkExMuWoKulqpLD6BN.1YCS', 'USt4ZC9ITVZQWFROM0FrOVFqL0pBUT09', '2019-11-23 19:59:12', NULL);
INSERT INTO `auth_person` VALUES (151, 154, 'angency02mukhtar', '$2y$10$CEcsr58S9vzTo5W045gE8.4tOC6YqgTvRR/MTLcGyZaHklIyszdd2', 'WUFEQm1mKy8xY1QyUjFneU9FaHFoZz09', '2019-11-23 19:59:43', NULL);
INSERT INTO `auth_person` VALUES (152, 155, 'Agency01nurmala', '$2y$10$Qac9NRyqPBslRQardV90Eesi6lyMVomYDE0q18IdoGWmwMC2GXNdq', 'bWdlYkFUNnh3ekEyQ0xSR2oyM29EQT09', '2019-11-23 20:00:27', NULL);
INSERT INTO `auth_person` VALUES (153, 156, 'agency01reprianus', '$2y$10$h35XflLUWe7Yq86RaXrCouz6K9jS/KXZ5K6pFsezrz44wZhZV6jxq', 'L0tQQ1FkWk8yaFRXUDIxdVB0VEhqdz09', '2019-11-23 20:11:54', NULL);
INSERT INTO `auth_person` VALUES (154, 157, 'stelaagency', '$2y$10$plqVnXZcGpOcmls9ZJZ6qOS8n8v2n6lyifhPqs9POFCXNJLFtdi2.', 'QnErWnFFS1gwZXl2ZjFNZkYxSlorUT09', '2019-11-23 20:14:25', NULL);
INSERT INTO `auth_person` VALUES (155, 158, 'agencyfathuddin', '$2y$10$Z0hTVIyZ2kzXLQNaFtTreee3kfgsN0FbBCm2IGgWoqM2c1Xy0m/g.', 'Q1J0M3UzQjgrekdpekxJTjlmdzBlQT09', '2019-11-23 20:46:04', NULL);
INSERT INTO `auth_person` VALUES (156, 159, 'ELI01', '$2y$10$A3XgeO3.2P7ZCMJeUWDOJuGWqu5xcf43biU/L5SR9ppBPkAI7h1ka', 'dDU4aytYdGgrTnlZQm1hVTN3VFRVUT09', '2019-11-23 20:47:58', NULL);
INSERT INTO `auth_person` VALUES (157, 160, 'agency01agung', '$2y$10$xAXzFquBDJUWz9FA6bXWI..LLoZUV8UWs5koyruXn2PTOjJ9hT9MO', 'RlZQOElZVzE2QU9RU1pMYWtsQUxmZz09', '2019-11-23 21:12:37', NULL);
INSERT INTO `auth_person` VALUES (158, 161, 'Iswan', '$2y$10$OCyeQbcAD4LZt4qw2N5c.uY2w12hZZuF7ZSOyc3/vUGLGBgQ2F9ka', 'U0xxYzlXSmxBY0ZvM2RERmFPVUJmZz09', '2019-11-25 19:19:58', NULL);
INSERT INTO `auth_person` VALUES (159, 162, 'almeera22', '$2y$10$850m46ouCeTWmX.s0XzVpeol9trCtp0WwuCGTP1EYCZteXTzQ5tGe', 'aU03UWljNS8zV0Rmc2JFZm5hWi9BZz09', '2019-11-27 10:40:46', NULL);
INSERT INTO `auth_person` VALUES (160, 163, 'alyssa22', '$2y$10$l3.17UqnFKoDbxCgC5up5eIVj5hi1v3Ukc6zkH7VQG5xsqT/WTbl2', 'c3RLRExEM1hBalBPbnRxV3VqSlVQUT09', '2019-11-27 11:16:08', NULL);
INSERT INTO `auth_person` VALUES (161, 164, 'Klien01', '$2y$10$pYci3gyeOSDCDiPQRcKgceVmOlsNp.6aP/Vhp0HPiY4Ni.vvrTl.K', 'a0F1UGhSWEFlU1hnbXlYb3hKdHJ1dz09', '2019-11-27 16:00:44', NULL);
INSERT INTO `auth_person` VALUES (162, 165, 'bokko01', '$2y$10$7jTsPKbai67v81C8T/h6f.ky/5utb/48wMaLggEuWdhMgN70nALD.', 'ZGU2L1ViN0FhaGdZejAyeGhWOURGUT09', '2019-11-27 17:30:20', NULL);
INSERT INTO `auth_person` VALUES (163, 166, 'asamember', '$2y$10$UlSBJTGkf26vvTuxpMSylua8xMyue/t5sfpURiuPgCDWiL8s8b8C6', 'R2ZSQTlMNGVVWXZHODZ1RUFWNmNKdz09', '2019-11-27 20:10:45', NULL);
INSERT INTO `auth_person` VALUES (164, 167, 'guimember02', '$2y$10$BzPqw611KicEN.8RNqgVtOTud8RxGO/XJvzyyD4BAmGP4lp5fvtpq', 'VERncy8zc1FpdEZvSzlrb1BwazA4QT09', '2019-11-27 20:52:25', NULL);
INSERT INTO `auth_person` VALUES (165, 168, 'liamemeber', '$2y$10$HKuNC3Fe4Fd1aZu3ZyHGX.sL2k2UOIABZFwdslerjnDzj0qIVkU2u', 'cTFkL1hhcXRCVzlab1MrQ2tTbXB5Zz09', '2019-11-27 21:16:01', NULL);
INSERT INTO `auth_person` VALUES (166, 169, 'hasbyagenccy', '$2y$10$sbILc5VqYO2AeWg6PMZdkeKRvp0BPxkC2tBuqdSb17JPazA.kQ4.G', 'cGgrZEhUckwycFBxRzJVTzgyUDdkZz09', '2019-11-28 00:02:25', NULL);
INSERT INTO `auth_person` VALUES (167, 170, 'tesfoncheetah', '$2y$10$udMDLDyMWHFq2sdxoaLITuS05uKiiUBXLRXuGwACm2wpprYmrDCN.', 'Q2tMU1gvYVE4VlIxNHJCQmMvNXIzdz09', '2019-11-28 00:50:43', NULL);
INSERT INTO `auth_person` VALUES (168, 171, 'cofcheetahtest', '$2y$10$jEphlq8EFDBUEE0K9SIHvOCaxI7lWJ8mXZ2cY5NNSEhtX1m2pFJRa', 'REdUVVRIM3gwUm52Wlh3N1Z0d0gxUT09', '2019-11-28 00:58:06', NULL);
INSERT INTO `auth_person` VALUES (169, 172, 'agncheetahtest', '$2y$10$QU1ARsU4qGoZ.wKlkKar3uyUva.YYP6mXvFjPIWnWpzXDdKUDp.TS', 'WERkS1ZKb29VbmgrWjh0Q0YrbzNtUT09', '2019-11-28 01:04:14', NULL);
INSERT INTO `auth_person` VALUES (170, 173, 'Beryl2018', '$2y$10$G/GdKBH/OP0Xlg8aXTHfhuwatv24XJF1wCmnpnvztXQDeKz.R7fbu', 'bHprbmlHK01FQ3BHUGtCdGxGNDlFZz09', '2019-11-28 09:23:37', NULL);
INSERT INTO `auth_person` VALUES (171, 174, 'agencycheetah', '$2y$10$widyhvbx/OxYRN1VQL2ch.vUCWgnUbPpe9I/G7wgrxi8YE1vGaDmO', 'QmJKeFBoUVB2TmdEV1F4azZPQkVPZz09', '2019-11-28 22:40:15', NULL);
INSERT INTO `auth_person` VALUES (172, 175, 'agencytest', '$2y$10$MAJ/MObrKM3vjTk30jsSoOLmjPRqW/UuosYq6.Jc8eF.VicLsJLJS', 'cmZqQllMbUJDNEtMN3N5Z0xxUWhsQT09', '2019-11-28 23:12:24', NULL);
INSERT INTO `auth_person` VALUES (173, 176, 'agencytutorial', '$2y$10$6vwDGCvGQzurT7lTQXTeAenyhRUfO7faBMtbfxH4NCZVnSVSk0LAi', 'NW9zQWpmdE85UXJ4VEpaZm81dXg4dz09', '2019-11-28 23:48:43', NULL);
INSERT INTO `auth_person` VALUES (174, 177, 'firmanmember', '$2y$10$RSZH.Mr.wkTcJbWDgCHF.eRPIGtxPqO3IqrQwH549vt2bRkZ27z1a', 'NG1hdUpIdS9BZjY0OUFJOHZ4TGtrdz09', '2019-11-29 00:02:50', NULL);
INSERT INTO `auth_person` VALUES (175, 178, 'contoh01', '$2y$10$m/F7YtsCpS3JmrbOuBVxz.gJqBmF397JeGC5sCwQtO9c6fY1in8ZW', 'eWt1UXJPSktmb2t5emRoZDdHZ2pPdz09', '2019-11-29 15:28:55', NULL);

-- ----------------------------
-- Table structure for contoh
-- ----------------------------
DROP TABLE IF EXISTS `contoh`;
CREATE TABLE `contoh`  (
  `id_contoh` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telepon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_contoh`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of contoh
-- ----------------------------
INSERT INTO `contoh` VALUES (1, 'contoh', '32131233', 'mpampam5@gmail.comss');

-- ----------------------------
-- Table structure for deposit
-- ----------------------------
DROP TABLE IF EXISTS `deposit`;
CREATE TABLE `deposit`  (
  `id_deposit` int(11) NOT NULL AUTO_INCREMENT,
  `kode_transaksi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_person` int(11) NULL DEFAULT NULL,
  `amount` bigint(11) NULL DEFAULT NULL,
  `amount_acc` bigint(11) NULL DEFAULT NULL,
  `biaya_admin` bigint(11) NULL DEFAULT NULL,
  `status` enum('process','cancel','approved') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'process',
  `metode_pembayaran` int(11) NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created` datetime NULL DEFAULT NULL,
  `time_approved` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_deposit`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 135 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of deposit
-- ----------------------------
INSERT INTO `deposit` VALUES (13, 'DP151119-01', 30, 5000564, 5000000, 150000, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-15 21:05:20\",\"keteragan\":\"approved\"}', '2019-11-15 21:03:15', NULL);
INSERT INTO `deposit` VALUES (14, 'DP151119-02', 31, 5000572, 5000000, 150000, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-15 21:31:57\",\"keteragan\":\"approved\"}', '2019-11-15 21:25:46', NULL);
INSERT INTO `deposit` VALUES (15, 'DP161119-01', 31, 5000627, NULL, 150000, 'process', 2, NULL, '2019-11-16 11:02:55', NULL);
INSERT INTO `deposit` VALUES (16, 'DP161119-02', 51, 1000000512, 1000000000, 150000, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"5\",\"time_approved\":\"2019-11-16 19:00:20\",\"keteragan\":\"approved\"}', '2019-11-16 17:53:27', NULL);
INSERT INTO `deposit` VALUES (17, 'DP161119-03', 52, 200000746, 200000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"8\",\"time_approved\":\"2019-11-16 18:59:39\",\"keteragan\":\"approved\"}', '2019-11-16 17:53:28', NULL);
INSERT INTO `deposit` VALUES (18, 'DP161119-04', 56, 500000671, 500000000, 150000, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"6\",\"time_approved\":\"2019-11-16 19:00:12\",\"keteragan\":\"approved\"}', '2019-11-16 17:53:41', NULL);
INSERT INTO `deposit` VALUES (19, 'DP161119-05', 54, 10000632, 10000000, 150000, 'approved', 4, '{\"approved_by\":\"admin\",\"id_admin\":\"9\",\"time_approved\":\"2019-11-16 19:00:18\",\"keteragan\":\"approved\"}', '2019-11-16 17:54:11', NULL);
INSERT INTO `deposit` VALUES (20, 'DP161119-06', 52, 5000736, 5000000, 150000, 'approved', 4, '{\"approved_by\":\"admin\",\"id_admin\":\"8\",\"time_approved\":\"2019-11-16 18:00:32\",\"keteragan\":\"approved\"}', '2019-11-16 17:54:12', NULL);
INSERT INTO `deposit` VALUES (21, 'DP161119-07', 53, 800150732, 800150000, 150000, 'approved', 4, '{\"approved_by\":\"admin\",\"id_admin\":\"8\",\"time_approved\":\"2019-11-16 19:14:23\",\"keteragan\":\"approved\"}', '2019-11-16 17:54:17', NULL);
INSERT INTO `deposit` VALUES (22, 'DP161119-08', 55, 1000341, 1000000, 0, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"7\",\"time_approved\":\"2019-11-16 19:00:55\",\"keteragan\":\"approved\"}', '2019-11-16 17:54:26', NULL);
INSERT INTO `deposit` VALUES (23, 'DP161119-09', 53, 800000653, 800000000, 150000, 'approved', 4, '{\"approved_by\":\"admin\",\"id_admin\":\"4\",\"time_approved\":\"2019-11-16 18:00:02\",\"keteragan\":\"approved\"}', '2019-11-16 17:54:58', NULL);
INSERT INTO `deposit` VALUES (24, 'DP161119-10', 63, 1000000652, NULL, 150000, 'process', 3, NULL, '2019-11-16 19:44:25', NULL);
INSERT INTO `deposit` VALUES (25, 'DP161119-11', 54, 50000625, NULL, 150000, 'process', 4, NULL, '2019-11-16 19:45:44', NULL);
INSERT INTO `deposit` VALUES (26, 'DP161119-12', 68, 100000365, NULL, 150000, 'process', 3, NULL, '2019-11-16 19:52:06', NULL);
INSERT INTO `deposit` VALUES (27, 'DP161119-13', 65, 700000274, 700000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"6\",\"time_approved\":\"2019-11-16 19:56:49\",\"keteragan\":\"approved\"}', '2019-11-16 19:52:42', NULL);
INSERT INTO `deposit` VALUES (28, 'DP161119-14', 68, 10000253, 10000000, 150000, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"7\",\"time_approved\":\"2019-11-16 19:56:07\",\"keteragan\":\"approved\"}', '2019-11-16 19:55:04', NULL);
INSERT INTO `deposit` VALUES (29, 'DP161119-15', 69, 50000652, NULL, 150000, 'cancel', 4, '', '2019-11-16 19:55:27', NULL);
INSERT INTO `deposit` VALUES (30, 'DP161119-16', 69, 50000467, NULL, 150000, 'process', 4, NULL, '2019-11-16 19:59:03', NULL);
INSERT INTO `deposit` VALUES (31, 'DP161119-17', 69, 50000245, NULL, 150000, 'process', 4, NULL, '2019-11-16 20:00:39', NULL);
INSERT INTO `deposit` VALUES (32, 'DP161119-18', 67, 600000315, 600000000, 150000, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"6\",\"time_approved\":\"2019-11-16 20:03:24\",\"keteragan\":\"approved\"}', '2019-11-16 20:02:39', NULL);
INSERT INTO `deposit` VALUES (33, 'DP161119-19', 54, 10000624, NULL, 150000, 'process', 4, NULL, '2019-11-16 20:03:08', NULL);
INSERT INTO `deposit` VALUES (35, 'DP171119-01', 54, 20000142, 20000000, 150000, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"8\",\"time_approved\":\"2019-11-21 01:33:33\",\"keteragan\":\"approved\"}', '2019-11-17 01:57:25', NULL);
INSERT INTO `deposit` VALUES (36, 'DP181119-02', 72, 10000521, 10000000, 150000, 'approved', 4, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-18 00:24:32\",\"keteragan\":\"approved\"}', '2019-11-18 00:22:37', NULL);
INSERT INTO `deposit` VALUES (37, 'DP221119-01', 113, 10000635, 10000000, 150000, 'approved', 4, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-22 23:57:27\",\"keteragan\":\"approved\"}', '2019-11-22 23:55:11', NULL);
INSERT INTO `deposit` VALUES (38, 'DP231119-02', 78, 777000143, 777000000, 150000, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-23 00:16:05\",\"keteragan\":\"approved\"}', '2019-11-23 00:10:53', NULL);
INSERT INTO `deposit` VALUES (39, 'DP231119-03', 109, 5000712, NULL, 150000, 'cancel', 4, '', '2019-11-23 17:35:54', NULL);
INSERT INTO `deposit` VALUES (40, 'DP231119-04', 109, 5000726, NULL, 150000, 'process', 4, NULL, '2019-11-23 17:37:16', NULL);
INSERT INTO `deposit` VALUES (41, 'DP231119-05', 109, 1000000521, NULL, 150000, 'process', 4, NULL, '2019-11-23 17:46:12', NULL);
INSERT INTO `deposit` VALUES (42, 'DP231119-06', 137, 1000000261, NULL, 150000, 'cancel', 3, '', '2019-11-23 20:02:07', NULL);
INSERT INTO `deposit` VALUES (43, 'DP231119-07', 114, 4900413, NULL, 0, 'process', 3, NULL, '2019-11-23 20:02:38', NULL);
INSERT INTO `deposit` VALUES (44, 'DP231119-08', 102, 10000156, 10000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-28 13:42:52\",\"keteragan\":\"approved\"}', '2019-11-23 20:02:46', NULL);
INSERT INTO `deposit` VALUES (45, 'DP231119-09', 113, 5000135, 5000000, 150000, 'approved', 4, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-23 20:06:07\",\"keteragan\":\"approved\"}', '2019-11-23 20:02:49', NULL);
INSERT INTO `deposit` VALUES (46, 'DP231119-10', 117, 5000152, NULL, 150000, 'process', 3, NULL, '2019-11-23 20:02:50', NULL);
INSERT INTO `deposit` VALUES (47, 'DP231119-11', 101, 1000672, NULL, 0, 'process', 3, NULL, '2019-11-23 20:02:52', NULL);
INSERT INTO `deposit` VALUES (48, 'DP231119-12', 101, 10000371, NULL, 150000, 'process', 2, NULL, '2019-11-23 20:02:54', NULL);
INSERT INTO `deposit` VALUES (49, 'DP231119-13', 116, 499000752, NULL, 150000, 'process', 2, NULL, '2019-11-23 20:02:58', NULL);
INSERT INTO `deposit` VALUES (50, 'DP231119-14', 92, 10150315, NULL, 150000, 'process', 2, NULL, '2019-11-23 20:02:58', NULL);
INSERT INTO `deposit` VALUES (51, 'DP231119-15', 111, 10000152, NULL, 150000, 'process', 4, NULL, '2019-11-23 20:02:58', NULL);
INSERT INTO `deposit` VALUES (52, 'DP231119-16', 78, 10000714, NULL, 150000, 'process', 3, NULL, '2019-11-23 20:03:18', NULL);
INSERT INTO `deposit` VALUES (53, 'DP231119-17', 132, 5150135, 5150000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-23 20:06:07\",\"keteragan\":\"approved\"}', '2019-11-23 20:03:18', NULL);
INSERT INTO `deposit` VALUES (54, 'DP231119-18', 77, 5000156, NULL, 150000, 'process', 2, NULL, '2019-11-23 20:03:20', NULL);
INSERT INTO `deposit` VALUES (55, 'DP231119-19', 91, 10000274, NULL, 150000, 'process', 2, NULL, '2019-11-23 20:04:05', NULL);
INSERT INTO `deposit` VALUES (56, 'DP231119-20', 127, 10000374, NULL, 150000, 'cancel', 2, '', '2019-11-23 20:04:11', NULL);
INSERT INTO `deposit` VALUES (57, 'DP231119-21', 131, 10000647, NULL, 150000, 'cancel', 2, '', '2019-11-23 20:04:18', NULL);
INSERT INTO `deposit` VALUES (58, 'DP231119-22', 129, 5150346, NULL, 150000, 'cancel', 3, '', '2019-11-23 20:04:35', NULL);
INSERT INTO `deposit` VALUES (59, 'DP231119-23', 94, 1000231, 1000000, 0, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-23 20:05:20\",\"keteragan\":\"approved\"}', '2019-11-23 20:04:48', NULL);
INSERT INTO `deposit` VALUES (60, 'DP231119-24', 85, 5000745, NULL, 150000, 'process', 2, NULL, '2019-11-23 20:05:15', NULL);
INSERT INTO `deposit` VALUES (61, 'DP231119-25', 103, 15000256, NULL, 150000, 'process', 3, NULL, '2019-11-23 20:06:03', NULL);
INSERT INTO `deposit` VALUES (62, 'DP231119-26', 107, 5000471, NULL, 150000, 'process', 2, NULL, '2019-11-23 20:06:05', NULL);
INSERT INTO `deposit` VALUES (63, 'DP231119-27', 86, 5000364, NULL, 150000, 'cancel', 2, '', '2019-11-23 20:06:12', NULL);
INSERT INTO `deposit` VALUES (64, 'DP231119-28', 108, 10000547, 10000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-27 20:44:22\",\"keteragan\":\"approved\"}', '2019-11-23 20:06:18', NULL);
INSERT INTO `deposit` VALUES (65, 'DP231119-29', 82, 10000423, NULL, 150000, 'process', 2, NULL, '2019-11-23 20:06:23', NULL);
INSERT INTO `deposit` VALUES (66, 'DP231119-30', 96, 1000615, NULL, 0, 'process', 2, NULL, '2019-11-23 20:06:25', NULL);
INSERT INTO `deposit` VALUES (67, 'DP231119-31', 101, 25000234, NULL, 150000, 'process', 2, NULL, '2019-11-23 20:06:35', NULL);
INSERT INTO `deposit` VALUES (68, 'DP231119-32', 95, 10000432, NULL, 150000, 'process', 3, NULL, '2019-11-23 20:06:36', NULL);
INSERT INTO `deposit` VALUES (69, 'DP231119-33', 101, 500000726, NULL, 150000, 'process', 3, NULL, '2019-11-23 20:07:12', NULL);
INSERT INTO `deposit` VALUES (70, 'DP231119-34', 91, 6000567, NULL, 150000, 'process', 2, NULL, '2019-11-23 20:07:15', NULL);
INSERT INTO `deposit` VALUES (71, 'DP231119-35', 88, 50150754, NULL, 150000, 'process', 2, NULL, '2019-11-23 20:07:28', NULL);
INSERT INTO `deposit` VALUES (72, 'DP231119-36', 137, 4999412, NULL, 0, 'process', 2, NULL, '2019-11-23 20:07:32', NULL);
INSERT INTO `deposit` VALUES (73, 'DP231119-37', 77, 5000153, NULL, 150000, 'process', 2, NULL, '2019-11-23 20:07:37', NULL);
INSERT INTO `deposit` VALUES (74, 'DP231119-38', 92, 5150365, NULL, 150000, 'process', 2, NULL, '2019-11-23 20:07:44', NULL);
INSERT INTO `deposit` VALUES (75, 'DP231119-39', 106, 1000347, NULL, 0, 'process', 4, NULL, '2019-11-23 20:08:05', NULL);
INSERT INTO `deposit` VALUES (76, 'DP231119-40', 77, 4000736, NULL, 0, 'process', 2, NULL, '2019-11-23 20:10:30', NULL);
INSERT INTO `deposit` VALUES (77, 'DP231119-41', 131, 10000714, NULL, 150000, 'cancel', 2, '', '2019-11-23 20:13:11', NULL);
INSERT INTO `deposit` VALUES (78, 'DP231119-42', 106, 1000542, NULL, 0, 'process', 3, NULL, '2019-11-23 20:23:50', NULL);
INSERT INTO `deposit` VALUES (79, 'DP231119-43', 119, 90000624, NULL, 150000, 'process', 2, NULL, '2019-11-23 20:43:32', NULL);
INSERT INTO `deposit` VALUES (80, 'DP231119-44', 127, 20000173, NULL, 150000, 'process', 2, NULL, '2019-11-23 20:49:26', NULL);
INSERT INTO `deposit` VALUES (81, 'DP231119-45', 147, 1000461, NULL, 0, 'cancel', 4, '', '2019-11-23 20:54:18', NULL);
INSERT INTO `deposit` VALUES (82, 'DP241119-01', 147, 1000253, NULL, 0, 'cancel', 3, '', '2019-11-24 12:09:41', NULL);
INSERT INTO `deposit` VALUES (83, 'DP251119-01', 78, 50000276, NULL, 150000, 'process', 2, NULL, '2019-11-25 19:02:00', NULL);
INSERT INTO `deposit` VALUES (84, 'DP251119-02', 78, 10000513, NULL, 150000, 'process', 2, NULL, '2019-11-25 19:09:03', NULL);
INSERT INTO `deposit` VALUES (85, 'DP251119-03', 161, 10000423, NULL, 150000, 'process', 2, NULL, '2019-11-25 19:24:55', NULL);
INSERT INTO `deposit` VALUES (86, 'DP261119-01', 30, 100000714, 100000000, 150000, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-26 03:55:27\",\"keteragan\":\"approved\"}', '2019-11-26 03:55:06', NULL);
INSERT INTO `deposit` VALUES (87, 'DP261119-02', 78, 50000516, NULL, 150000, 'process', 2, NULL, '2019-11-26 15:14:58', NULL);
INSERT INTO `deposit` VALUES (88, 'DP261119-03', 101, 4500243, NULL, 0, 'process', 2, NULL, '2019-11-26 15:47:18', NULL);
INSERT INTO `deposit` VALUES (89, 'DP261119-04', 101, 100000536, NULL, 150000, 'process', 2, NULL, '2019-11-26 15:47:20', NULL);
INSERT INTO `deposit` VALUES (90, 'DP261119-05', 101, 5000364, NULL, 150000, 'process', 3, NULL, '2019-11-26 15:47:23', NULL);
INSERT INTO `deposit` VALUES (91, 'DP261119-06', 101, 4000134, NULL, 0, 'process', 3, NULL, '2019-11-26 15:47:39', NULL);
INSERT INTO `deposit` VALUES (92, 'DP261119-07', 101, 5000463, NULL, 150000, 'process', 3, NULL, '2019-11-26 15:47:58', NULL);
INSERT INTO `deposit` VALUES (93, 'DP261119-08', 101, 10000314, NULL, 150000, 'process', 3, NULL, '2019-11-26 15:50:21', NULL);
INSERT INTO `deposit` VALUES (94, 'DP261119-09', 101, 50000423, NULL, 150000, 'process', 2, NULL, '2019-11-26 15:53:37', NULL);
INSERT INTO `deposit` VALUES (95, 'DP261119-10', 101, 10000243, 10000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-27 14:58:14\",\"keteragan\":\"approved\"}', '2019-11-26 16:59:30', NULL);
INSERT INTO `deposit` VALUES (96, 'DP261119-11', 107, 5000475, 5000000, 150000, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-27 14:57:40\",\"keteragan\":\"approved\"}', '2019-11-26 22:47:08', NULL);
INSERT INTO `deposit` VALUES (97, 'DP271119-01', 30, 10000432, NULL, 150000, 'process', 2, NULL, '2019-11-27 15:44:57', NULL);
INSERT INTO `deposit` VALUES (98, 'DP271119-02', 146, 50000123, NULL, 150000, 'cancel', 3, '', '2019-11-27 15:49:52', NULL);
INSERT INTO `deposit` VALUES (99, 'DP271119-03', 146, 100000312, 100000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-28 13:41:40\",\"keteragan\":\"approved\"}', '2019-11-27 15:51:22', NULL);
INSERT INTO `deposit` VALUES (100, 'DP271119-04', 146, 3000632, 3000000, 0, 'process', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-29 14:36:43\",\"keteragan\":\"approved\"}', '2019-11-27 16:01:24', NULL);
INSERT INTO `deposit` VALUES (101, 'DP271119-05', 101, 5000723, NULL, 150000, 'process', 2, NULL, '2019-11-27 17:15:19', NULL);
INSERT INTO `deposit` VALUES (102, 'DP271119-06', 101, 5000472, NULL, 150000, 'cancel', 3, '', '2019-11-27 17:29:31', NULL);
INSERT INTO `deposit` VALUES (103, 'DP271119-07', 101, 10000261, NULL, 150000, 'process', 3, NULL, '2019-11-27 17:32:36', NULL);
INSERT INTO `deposit` VALUES (104, 'DP271119-08', 101, 5000314, 5000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-28 13:41:17\",\"keteragan\":\"approved\"}', '2019-11-27 17:36:12', NULL);
INSERT INTO `deposit` VALUES (105, 'DP271119-09', 101, 5000457, 5000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-28 13:40:41\",\"keteragan\":\"approved\"}', '2019-11-27 17:42:29', NULL);
INSERT INTO `deposit` VALUES (106, 'DP271119-10', 101, 100000132, 100000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-28 13:40:28\",\"keteragan\":\"approved\"}', '2019-11-27 18:07:51', NULL);
INSERT INTO `deposit` VALUES (107, 'DP271119-11', 149, 50000214, 50000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-27 20:37:37\",\"keteragan\":\"approved\"}', '2019-11-27 20:21:15', NULL);
INSERT INTO `deposit` VALUES (108, 'DP271119-12', 166, 50000365, 50000000, 150000, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-27 20:37:12\",\"keteragan\":\"approved\"}', '2019-11-27 20:22:10', NULL);
INSERT INTO `deposit` VALUES (109, 'DP271119-13', 166, 4000476, 4000000, 0, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-27 20:47:56\",\"keteragan\":\"approved\"}', '2019-11-27 20:47:19', NULL);
INSERT INTO `deposit` VALUES (110, 'DP271119-14', 167, 5000754, 5000000, 150000, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-27 21:04:06\",\"keteragan\":\"approved\"}', '2019-11-27 21:00:48', NULL);
INSERT INTO `deposit` VALUES (111, 'DP271119-15', 168, 5000375, 5000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-27 21:27:37\",\"keteragan\":\"approved\"}', '2019-11-27 21:18:57', NULL);
INSERT INTO `deposit` VALUES (112, 'DP271119-16', 168, 5000264, 5000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-27 21:28:31\",\"keteragan\":\"approved\"}', '2019-11-27 21:26:26', NULL);
INSERT INTO `deposit` VALUES (113, 'DP271119-17', 113, 600000362, 600000000, 150000, 'approved', 4, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-28 13:42:06\",\"keteragan\":\"approved\"}', '2019-11-27 22:07:04', NULL);
INSERT INTO `deposit` VALUES (114, 'DP271119-18', 77, 5000763, NULL, 150000, 'process', 2, NULL, '2019-11-27 22:18:17', NULL);
INSERT INTO `deposit` VALUES (115, 'DP281119-01', 172, 100000341, 100000000, 150000, 'approved', 4, '{\"approved_by\":\"admin\",\"id_admin\":\"2\",\"time_approved\":\"2019-11-28 02:51:54\",\"keteragan\":\"approved\"}', '2019-11-28 02:31:05', NULL);
INSERT INTO `deposit` VALUES (116, 'DP281119-02', 146, 50000341, 50000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-28 13:40:04\",\"keteragan\":\"approved\"}', '2019-11-28 09:37:12', NULL);
INSERT INTO `deposit` VALUES (117, 'DP281119-03', 30, 10000354, 10000000, 150000, 'approved', 4, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-28 13:39:43\",\"keteragan\":\"approved\"}', '2019-11-28 13:39:01', NULL);
INSERT INTO `deposit` VALUES (118, 'DP281119-04', 30, 10000715, 10000000, 150000, 'approved', 4, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-28 15:50:52\",\"keteragan\":\"approved\"}', '2019-11-28 15:50:03', NULL);
INSERT INTO `deposit` VALUES (119, 'DP281119-05', 146, 10000435, 10000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-29 02:46:14\",\"keteragan\":\"approved\"}', '2019-11-28 18:17:52', NULL);
INSERT INTO `deposit` VALUES (120, 'DP281119-06', 146, 1000673, 1000000, 0, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"2\",\"time_approved\":\"2019-11-28 22:49:41\",\"keteragan\":\"approved\"}', '2019-11-28 18:19:02', NULL);
INSERT INTO `deposit` VALUES (121, 'DP281119-07', 110, 30150274, NULL, 150000, 'cancel', 2, '', '2019-11-28 18:27:01', NULL);
INSERT INTO `deposit` VALUES (122, 'DP281119-08', 118, 5000764, 5000000, 150000, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"2\",\"time_approved\":\"2019-11-28 22:47:53\",\"keteragan\":\"approved\"}', '2019-11-28 18:52:34', NULL);
INSERT INTO `deposit` VALUES (123, 'DP281119-09', 174, 5000251, NULL, 150000, 'process', 4, NULL, '2019-11-28 23:03:26', NULL);
INSERT INTO `deposit` VALUES (124, 'DP281119-10', 175, 5000413, 5000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-28 23:55:18\",\"keteragan\":\"approved\"}', '2019-11-28 23:40:34', NULL);
INSERT INTO `deposit` VALUES (125, 'DP291119-11', 172, 10000724, 10000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-29 03:49:31\",\"keteragan\":\"approved\"}', '2019-11-29 00:03:25', NULL);
INSERT INTO `deposit` VALUES (126, 'DP291119-11', 177, 50000346, 50000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-29 00:08:24\",\"keteragan\":\"approved\"}', '2019-11-29 00:06:40', NULL);
INSERT INTO `deposit` VALUES (127, 'DP291119-12', 176, 5000165, 5000000, 150000, 'approved', 4, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-29 01:26:35\",\"keteragan\":\"approved\"}', '2019-11-29 01:25:21', NULL);
INSERT INTO `deposit` VALUES (128, 'DP291119-13', 30, 800000132, 800000000, 150000, 'approved', 4, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-29 02:38:52\",\"keteragan\":\"approved\"}', '2019-11-29 02:37:53', NULL);
INSERT INTO `deposit` VALUES (129, 'DP291119-14', 132, 10000167, NULL, 150000, 'cancel', 2, '', '2019-11-29 09:21:13', NULL);
INSERT INTO `deposit` VALUES (130, 'DP291119-15', 89, 20000632, 20000000, 150000, 'process', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-29 14:18:16\",\"keteragan\":\"approved\"}', '2019-11-29 09:22:55', NULL);
INSERT INTO `deposit` VALUES (131, 'DP291119-16', 178, 10000524, 10000000, 150000, 'approved', 2, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-29 17:43:28\",\"keteragan\":\"approved\"}', '2019-11-29 17:41:51', NULL);
INSERT INTO `deposit` VALUES (132, 'DP291119-17', 178, 5000471, 5000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-29 18:00:07\",\"keteragan\":\"approved\"}', '2019-11-29 17:58:36', NULL);
INSERT INTO `deposit` VALUES (133, 'DP291119-18', 178, 10000461, 10000000, 150000, 'approved', 3, '{\"approved_by\":\"admin\",\"id_admin\":\"1\",\"time_approved\":\"2019-11-29 18:17:39\",\"keteragan\":\"approved\"}', '2019-11-29 18:17:10', NULL);
INSERT INTO `deposit` VALUES (134, 'DP291119-19', 178, 1000752, NULL, 0, 'process', 4, NULL, '2019-11-29 19:20:17', NULL);

-- ----------------------------
-- Table structure for history_comission
-- ----------------------------
DROP TABLE IF EXISTS `history_comission`;
CREATE TABLE `history_comission`  (
  `di_history` int(11) NOT NULL AUTO_INCREMENT,
  `id_person` int(11) NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`di_history`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for investment
-- ----------------------------
DROP TABLE IF EXISTS `investment`;
CREATE TABLE `investment`  (
  `id_invest` int(11) NOT NULL AUTO_INCREMENT,
  `kode_invest` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_person` int(11) NULL DEFAULT NULL,
  `group` int(11) NULL DEFAULT NULL,
  `amount` bigint(11) NULL DEFAULT NULL,
  `status` enum('ongoing','done') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'ongoing',
  `alamat_kirim_spk` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `qr_code` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created` date NULL DEFAULT NULL,
  `kontrak_start` date NULL DEFAULT NULL,
  `kontrak_end` date NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_invest`, `kode_invest`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 81 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of investment
-- ----------------------------
INSERT INTO `investment` VALUES (52, 'AGN-000001-INV001', 31, 15, 5000000, 'ongoing', '', NULL, '2019-11-15', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (53, 'MEM-000002-INV001', 52, 15, 200000000, 'ongoing', '', NULL, '2019-11-16', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (54, 'MEM-000003-INV002', 53, 15, 600000000, 'ongoing', '', NULL, '2019-11-16', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (55, 'MEM-000006-INV003', 56, 15, 500000000, 'ongoing', '', NULL, '2019-11-16', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (56, 'MEM-000005-INV004', 55, 15, 1000000, 'ongoing', '', NULL, '2019-11-16', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (57, 'MEM-000001-INV005', 51, 15, 1000000000, 'ongoing', '', NULL, '2019-11-16', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (58, 'MEM-000004-INV006', 54, 15, 10000000, 'ongoing', '', NULL, '2019-11-16', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (59, 'MEM-000009-INV007', 68, 15, 10000000, 'ongoing', '', NULL, '2019-11-16', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (60, 'AGN-000011-INV008', 65, 15, 2000000, 'ongoing', '', NULL, '2019-11-16', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (61, 'MEM-000008-INV009', 67, 15, 5000000, 'ongoing', '', NULL, '2019-11-16', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (62, 'AGN-000012-INV001', 72, 15, 10000000, 'ongoing', '', NULL, '2019-11-18', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (63, 'AGN-000013-INV001', 113, 15, 15000000, 'ongoing', 'Dikantor', NULL, '2019-11-23', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (64, 'AGN-000022-INV002', 132, 15, 5000000, 'ongoing', '...', NULL, '2019-11-23', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (65, 'FON-000016-INV001', 78, 15, 50000000, 'ongoing', 'Fyfdhh', NULL, '2019-11-25', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (66, 'FON-000016-INV002', 78, 15, 40000000, 'ongoing', 'Diama', NULL, '2019-11-25', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (67, 'COF-000001-INV001', 30, 15, 100000000, 'ongoing', 'kantor', NULL, '2019-11-26', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (68, 'FON-000016-INV002', 78, 15, 50000000, 'ongoing', 'Tjjgdg', NULL, '2019-11-26', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (69, 'COF-000031-INV001', 101, 15, 2000000, 'ongoing', 'Jl Pembagunan No 60 Rantepao Toraja Utara', NULL, '2019-11-27', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (70, 'COF-000031-INV002', 101, 15, 5000000, 'ongoing', 'Jalan pembagunan no 60 Rantepao', NULL, '2019-11-27', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (71, 'COF-000031-INV003', 101, 15, 1000000, 'ongoing', 'Jl. Pembangunan No 60', NULL, '2019-11-27', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (72, 'COF-000001-INV001', 30, 15, 5000000, 'ongoing', 'kantor', NULL, '2019-11-28', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (73, 'COF-000001-INV002', 30, 15, 10000000, 'ongoing', 'KANTOR', NULL, '2019-11-28', '2019-11-15', '2020-11-15', NULL);
INSERT INTO `investment` VALUES (74, 'COF-000001-INV003', 30, 15, 10000000, 'ongoing', 'KNTOR', NULL, '2019-11-28', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (75, 'MEM-000022-INV001', 178, 15, 10000000, 'ongoing', 'Jl. muhajirin Raya', NULL, '2019-11-29', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (76, 'MEM-000022-INV002', 178, 15, 5000000, 'ongoing', 'dsadsa', 'contoh_01_MEM-000022-INV002.png', '2019-11-29', '2019-11-15', '2020-05-15', NULL);
INSERT INTO `investment` VALUES (77, 'MEM-000022-INV003', 178, 1, 2000000, 'ongoing', '123456', 'contoh_01_MEM-000022-INV003.png', '2019-11-29', '2019-11-01', '2020-05-01', NULL);
INSERT INTO `investment` VALUES (78, 'MEM-000022-INV004', 178, 1, 1000000, 'ongoing', 'ddas', 'contoh_01_MEM-000022-INV004.png', '2019-11-29', '2019-12-01', '2020-06-01', NULL);
INSERT INTO `investment` VALUES (79, 'MEM-000022-INV001', 178, 15, 1000000, 'ongoing', 'dsadas', 'contoh_01_MEM-000022-INV001.png', '2019-11-11', '2019-12-15', '2020-06-15', NULL);
INSERT INTO `investment` VALUES (80, 'MEM-000022-INV001', 178, 1, 1000000, 'ongoing', 'rewwe', 'contoh_01_MEM-000022-INV001.png', '2019-11-04', '2019-11-01', '2020-05-01', NULL);

-- ----------------------------
-- Table structure for investment_dividen
-- ----------------------------
DROP TABLE IF EXISTS `investment_dividen`;
CREATE TABLE `investment_dividen`  (
  `id_invest_dividen` int(11) NOT NULL AUTO_INCREMENT,
  `id_invest` int(11) NULL DEFAULT NULL,
  `id_person` int(11) NULL DEFAULT NULL,
  `no_dividen` int(11) NULL DEFAULT NULL,
  `time_dividen` date NULL DEFAULT NULL,
  `persentase` int(11) NULL DEFAULT NULL,
  `amount` bigint(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_invest_dividen`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 57 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of investment_dividen
-- ----------------------------
INSERT INTO `investment_dividen` VALUES (19, 52, 30, 1, '2019-12-15', 5, 250000);
INSERT INTO `investment_dividen` VALUES (20, 52, 19, 1, '2019-12-15', 1, 50000);
INSERT INTO `investment_dividen` VALUES (21, 53, 45, 1, '2019-12-15', 2, 4000000);
INSERT INTO `investment_dividen` VALUES (22, 53, 38, 1, '2019-12-15', 3, 6000000);
INSERT INTO `investment_dividen` VALUES (23, 53, 35, 1, '2019-12-15', 1, 2000000);
INSERT INTO `investment_dividen` VALUES (24, 54, 47, 1, '2019-12-15', 3, 18000000);
INSERT INTO `investment_dividen` VALUES (25, 54, 40, 1, '2019-12-15', 2, 12000000);
INSERT INTO `investment_dividen` VALUES (26, 54, 34, 1, '2019-12-15', 1, 6000000);
INSERT INTO `investment_dividen` VALUES (27, 55, 49, 1, '2019-12-15', 3, 15000000);
INSERT INTO `investment_dividen` VALUES (28, 55, 43, 1, '2019-12-15', 2, 10000000);
INSERT INTO `investment_dividen` VALUES (29, 55, 37, 1, '2019-12-15', 1, 5000000);
INSERT INTO `investment_dividen` VALUES (30, 56, 46, 1, '2019-12-15', 3, 30000);
INSERT INTO `investment_dividen` VALUES (31, 56, 42, 1, '2019-12-15', 2, 20000);
INSERT INTO `investment_dividen` VALUES (32, 56, 36, 1, '2019-12-15', 1, 10000);
INSERT INTO `investment_dividen` VALUES (33, 57, 50, 1, '2019-12-15', 4, 40000000);
INSERT INTO `investment_dividen` VALUES (34, 57, 39, 1, '2019-12-15', 1, 10000000);
INSERT INTO `investment_dividen` VALUES (35, 57, 32, 1, '2019-12-15', 1, 10000000);
INSERT INTO `investment_dividen` VALUES (36, 58, 48, 1, '2019-12-15', 4, 400000);
INSERT INTO `investment_dividen` VALUES (37, 58, 41, 1, '2019-12-15', 1, 100000);
INSERT INTO `investment_dividen` VALUES (38, 58, 33, 1, '2019-12-15', 1, 100000);
INSERT INTO `investment_dividen` VALUES (39, 59, 63, 1, '2019-12-15', 4, 400000);
INSERT INTO `investment_dividen` VALUES (40, 59, 60, 1, '2019-12-15', 1, 100000);
INSERT INTO `investment_dividen` VALUES (41, 59, 57, 1, '2019-12-15', 1, 100000);
INSERT INTO `investment_dividen` VALUES (42, 60, 61, 1, '2019-12-15', 5, 100000);
INSERT INTO `investment_dividen` VALUES (43, 60, 58, 1, '2019-12-15', 1, 20000);
INSERT INTO `investment_dividen` VALUES (44, 61, 65, 1, '2019-12-15', 4, 200000);
INSERT INTO `investment_dividen` VALUES (45, 61, 61, 1, '2019-12-15', 1, 50000);
INSERT INTO `investment_dividen` VALUES (46, 61, 58, 1, '2019-12-15', 1, 50000);
INSERT INTO `investment_dividen` VALUES (47, 62, 30, 1, '2019-12-15', 5, 500000);
INSERT INTO `investment_dividen` VALUES (48, 62, 19, 1, '2019-12-15', 1, 100000);
INSERT INTO `investment_dividen` VALUES (49, 63, 81, 1, '2019-12-15', 5, 750000);
INSERT INTO `investment_dividen` VALUES (50, 63, 80, 1, '2019-12-15', 1, 150000);
INSERT INTO `investment_dividen` VALUES (51, 64, 89, 1, '2019-12-15', 5, 250000);
INSERT INTO `investment_dividen` VALUES (52, 64, 80, 1, '2019-12-15', 1, 50000);
INSERT INTO `investment_dividen` VALUES (53, 67, 19, 1, '2019-12-15', 6, 6000000);
INSERT INTO `investment_dividen` VALUES (54, 69, 75, 1, '2019-12-15', 6, 120000);
INSERT INTO `investment_dividen` VALUES (55, 70, 75, 1, '2019-12-15', 6, 300000);
INSERT INTO `investment_dividen` VALUES (56, 71, 75, 1, '2019-12-15', 6, 60000);

-- ----------------------------
-- Table structure for investment_profit
-- ----------------------------
DROP TABLE IF EXISTS `investment_profit`;
CREATE TABLE `investment_profit`  (
  `id_invest_profit` int(11) NOT NULL AUTO_INCREMENT,
  `id_invest` int(11) NULL DEFAULT NULL,
  `no_profit` int(11) NULL DEFAULT NULL,
  `time_profit` date NULL DEFAULT NULL,
  `name_profit` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `amount_profit` bigint(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_invest_profit`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 223 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of investment_profit
-- ----------------------------
INSERT INTO `investment_profit` VALUES (43, 52, 1, '2019-12-15', 'Profit ke 1', 1000000);
INSERT INTO `investment_profit` VALUES (44, 52, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (45, 52, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (46, 52, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (47, 52, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (48, 52, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (49, 53, 1, '2019-12-15', 'Profit ke 1', 40000000);
INSERT INTO `investment_profit` VALUES (50, 53, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (51, 53, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (52, 53, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (53, 53, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (54, 53, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (55, 54, 1, '2019-12-15', 'Profit ke 1', 120000000);
INSERT INTO `investment_profit` VALUES (56, 54, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (57, 54, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (58, 54, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (59, 54, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (60, 54, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (61, 55, 1, '2019-12-15', 'Profit ke 1', 100000000);
INSERT INTO `investment_profit` VALUES (62, 55, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (63, 55, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (64, 55, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (65, 55, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (66, 55, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (67, 56, 1, '2019-12-15', 'Profit ke 1', 200000);
INSERT INTO `investment_profit` VALUES (68, 56, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (69, 56, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (70, 56, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (71, 56, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (72, 56, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (73, 57, 1, '2019-12-15', 'Profit ke 1', 200000000);
INSERT INTO `investment_profit` VALUES (74, 57, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (75, 57, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (76, 57, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (77, 57, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (78, 57, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (79, 58, 1, '2019-12-15', 'Profit ke 1', 2000000);
INSERT INTO `investment_profit` VALUES (80, 58, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (81, 58, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (82, 58, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (83, 58, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (84, 58, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (85, 59, 1, '2019-12-15', 'Profit ke 1', 2000000);
INSERT INTO `investment_profit` VALUES (86, 59, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (87, 59, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (88, 59, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (89, 59, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (90, 59, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (91, 60, 1, '2019-12-15', 'Profit ke 1', 400000);
INSERT INTO `investment_profit` VALUES (92, 60, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (93, 60, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (94, 60, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (95, 60, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (96, 60, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (97, 61, 1, '2019-12-15', 'Profit ke 1', 1000000);
INSERT INTO `investment_profit` VALUES (98, 61, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (99, 61, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (100, 61, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (101, 61, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (102, 61, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (103, 62, 1, '2019-12-15', 'Profit ke 1', 2000000);
INSERT INTO `investment_profit` VALUES (104, 62, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (105, 62, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (106, 62, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (107, 62, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (108, 62, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (109, 63, 1, '2019-12-15', 'Profit ke 1', 3000000);
INSERT INTO `investment_profit` VALUES (110, 63, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (111, 63, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (112, 63, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (113, 63, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (114, 63, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (115, 64, 1, '2019-12-15', 'Profit ke 1', 1000000);
INSERT INTO `investment_profit` VALUES (116, 64, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (117, 64, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (118, 64, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (119, 64, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (120, 64, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (121, 65, 1, '2019-12-15', 'Profit ke 1', 10000000);
INSERT INTO `investment_profit` VALUES (122, 65, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (123, 65, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (124, 65, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (125, 65, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (126, 65, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (127, 66, 1, '2019-12-15', 'Profit ke 1', 8000000);
INSERT INTO `investment_profit` VALUES (128, 66, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (129, 66, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (130, 66, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (131, 66, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (132, 66, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (133, 67, 1, '2019-12-15', 'Profit ke 1', 20000000);
INSERT INTO `investment_profit` VALUES (134, 67, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (135, 67, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (136, 67, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (137, 67, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (138, 67, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (139, 68, 1, '2019-12-15', 'Profit ke 1', 10000000);
INSERT INTO `investment_profit` VALUES (140, 68, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (141, 68, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (142, 68, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (143, 68, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (144, 68, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (145, 69, 1, '2019-12-15', 'Profit ke 1', 400000);
INSERT INTO `investment_profit` VALUES (146, 69, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (147, 69, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (148, 69, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (149, 69, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (150, 69, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (151, 70, 1, '2019-12-15', 'Profit ke 1', 1000000);
INSERT INTO `investment_profit` VALUES (152, 70, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (153, 70, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (154, 70, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (155, 70, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (156, 70, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (157, 71, 1, '2019-12-15', 'Profit ke 1', 200000);
INSERT INTO `investment_profit` VALUES (158, 71, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (159, 71, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (160, 71, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (161, 71, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (162, 71, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (163, 72, 1, '2019-12-15', 'Profit ke 1', NULL);
INSERT INTO `investment_profit` VALUES (164, 72, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (165, 72, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (166, 72, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (167, 72, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (168, 72, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (169, 73, 1, '2019-12-15', 'Profit ke 1', NULL);
INSERT INTO `investment_profit` VALUES (170, 73, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (171, 73, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (172, 73, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (173, 73, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (174, 73, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (175, 73, 7, '2020-06-15', 'Profit ke 7', NULL);
INSERT INTO `investment_profit` VALUES (176, 73, 8, '2020-07-15', 'Profit ke 8', NULL);
INSERT INTO `investment_profit` VALUES (177, 73, 9, '2020-08-15', 'Profit ke 9', NULL);
INSERT INTO `investment_profit` VALUES (178, 73, 10, '2020-09-15', 'Profit ke 10', NULL);
INSERT INTO `investment_profit` VALUES (179, 73, 11, '2020-10-15', 'Profit ke 11', NULL);
INSERT INTO `investment_profit` VALUES (180, 73, 12, '2020-11-15', 'Profit ke 12', NULL);
INSERT INTO `investment_profit` VALUES (181, 74, 1, '2019-12-15', 'Profit ke 1', NULL);
INSERT INTO `investment_profit` VALUES (182, 74, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (183, 74, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (184, 74, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (185, 74, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (186, 74, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (187, 75, 1, '2019-12-15', 'Profit ke 1', NULL);
INSERT INTO `investment_profit` VALUES (188, 75, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (189, 75, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (190, 75, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (191, 75, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (192, 75, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (193, 76, 1, '2019-12-15', 'Profit ke 1', NULL);
INSERT INTO `investment_profit` VALUES (194, 76, 2, '2020-01-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (195, 76, 3, '2020-02-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (196, 76, 4, '2020-03-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (197, 76, 5, '2020-04-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (198, 76, 6, '2020-05-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (199, 77, 1, '2019-12-01', 'Profit ke 1', NULL);
INSERT INTO `investment_profit` VALUES (200, 77, 2, '2020-01-01', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (201, 77, 3, '2020-02-01', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (202, 77, 4, '2020-03-01', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (203, 77, 5, '2020-04-01', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (204, 77, 6, '2020-05-01', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (205, 78, 1, '2020-01-01', 'Profit ke 1', NULL);
INSERT INTO `investment_profit` VALUES (206, 78, 2, '2020-02-01', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (207, 78, 3, '2020-03-01', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (208, 78, 4, '2020-04-01', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (209, 78, 5, '2020-05-01', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (210, 78, 6, '2020-06-01', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (211, 79, 1, '2020-01-15', 'Profit ke 1', NULL);
INSERT INTO `investment_profit` VALUES (212, 79, 2, '2020-02-15', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (213, 79, 3, '2020-03-15', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (214, 79, 4, '2020-04-15', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (215, 79, 5, '2020-05-15', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (216, 79, 6, '2020-06-15', 'Profit ke 6', NULL);
INSERT INTO `investment_profit` VALUES (217, 80, 1, '2019-12-01', 'Profit ke 1', NULL);
INSERT INTO `investment_profit` VALUES (218, 80, 2, '2020-01-01', 'Profit ke 2', NULL);
INSERT INTO `investment_profit` VALUES (219, 80, 3, '2020-02-01', 'Profit ke 3', NULL);
INSERT INTO `investment_profit` VALUES (220, 80, 4, '2020-03-01', 'Profit ke 4', NULL);
INSERT INTO `investment_profit` VALUES (221, 80, 5, '2020-04-01', 'Profit ke 5', NULL);
INSERT INTO `investment_profit` VALUES (222, 80, 6, '2020-05-01', 'Profit ke 6', NULL);

-- ----------------------------
-- Table structure for level_person
-- ----------------------------
DROP TABLE IF EXISTS `level_person`;
CREATE TABLE `level_person`  (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `comission` int(11) NULL DEFAULT NULL,
  `created` datetime NULL DEFAULT NULL,
  `modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_level`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of level_person
-- ----------------------------
INSERT INTO `level_person` VALUES (1, 'Founder', 6, '2019-10-29 13:35:30', NULL);
INSERT INTO `level_person` VALUES (2, 'Co Founder', 5, '2019-10-29 13:35:50', NULL);
INSERT INTO `level_person` VALUES (3, 'Agency', 4, '2019-10-22 19:46:15', NULL);
INSERT INTO `level_person` VALUES (4, 'Member', 3, '2019-10-29 19:46:20', NULL);

-- ----------------------------
-- Table structure for pengeluaran_baju
-- ----------------------------
DROP TABLE IF EXISTS `pengeluaran_baju`;
CREATE TABLE `pengeluaran_baju`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_person` int(11) NULL DEFAULT NULL,
  `ukuran_baju` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` enum('belum','sudah') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'belum',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pengeluaran_baju
-- ----------------------------
INSERT INTO `pengeluaran_baju` VALUES (1, 89, 'M', 'sudah');
INSERT INTO `pengeluaran_baju` VALUES (2, 178, 'XL', 'belum');
INSERT INTO `pengeluaran_baju` VALUES (3, 178, 'XL', 'belum');
INSERT INTO `pengeluaran_baju` VALUES (4, 178, 'XL', 'belum');

-- ----------------------------
-- Table structure for rekening_person
-- ----------------------------
DROP TABLE IF EXISTS `rekening_person`;
CREATE TABLE `rekening_person`  (
  `id_rekening_person` int(11) NOT NULL AUTO_INCREMENT,
  `id_person` int(11) NULL DEFAULT NULL,
  `nama_rekening` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_rekening` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bank` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `file_foto_rek` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_rekening_person`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 173 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of rekening_person
-- ----------------------------
INSERT INTO `rekening_person` VALUES (13, 19, 'founder01', '03310230289378', 'BNI', 'rek_VjU0L2ZOWUJQUjhNNVNoR3BtZE8xUT09.jpg');
INSERT INTO `rekening_person` VALUES (24, 30, 'asjas', '123345657', 'bri', 'rek_aTRMRThtbFBVa0JQU2RrYVptelFUQT09.jpg');
INSERT INTO `rekening_person` VALUES (25, 31, 'BRI', '76020769119200', 'BRI', 'rek_MllHcHVzUDBjRkVNd2xDamJjOEZMZz09.jpg');
INSERT INTO `rekening_person` VALUES (26, 32, 'BRIGITA MB', '435101654432651', 'BRI', NULL);
INSERT INTO `rekening_person` VALUES (27, 33, 'FELIX', '502986474637483', 'BRI', NULL);
INSERT INTO `rekening_person` VALUES (28, 34, 'lidya', '3681709337', 'bca', NULL);
INSERT INTO `rekening_person` VALUES (29, 35, 'INDRA', '7994889452', 'BCA', NULL);
INSERT INTO `rekening_person` VALUES (30, 36, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (31, 37, 'sudirman', '123401345678532', 'bank bri', NULL);
INSERT INTO `rekening_person` VALUES (32, 38, 'INDRI', '7985456548', 'BCA', NULL);
INSERT INTO `rekening_person` VALUES (33, 39, 'BRIGITA MB', '7684521234', 'BCA', NULL);
INSERT INTO `rekening_person` VALUES (34, 40, 'babe', '3681709337', 'bca', NULL);
INSERT INTO `rekening_person` VALUES (35, 41, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (36, 42, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (37, 43, 'dede', '342501234567533', 'bank bri', NULL);
INSERT INTO `rekening_person` VALUES (38, 44, 'WIRO', '7685435122', 'BCA', NULL);
INSERT INTO `rekening_person` VALUES (39, 45, 'INDRO', '7958521456', 'BCA', 'rek_SmVod3JXOFZWeXRHNnpJNFBER3ZDdz09.jpg');
INSERT INTO `rekening_person` VALUES (40, 46, 'mandiri', '170006757578', 'sotta', 'rek_RHc0U0hueHgwVDNUVGMrdEwzaFQwdz09.jpg');
INSERT INTO `rekening_person` VALUES (41, 47, 'waahyu', '3681709337', 'bca', 'rek_bnZ3Z3NUK2hTeG1mdXUrOGY1UEVMdz09.jpg');
INSERT INTO `rekening_person` VALUES (42, 48, 'WELL', '4638495334567865', 'BRI', 'rek_NEFRR1ZlWUJGZnliNWpJNU1oT1JBUT09.jpg');
INSERT INTO `rekening_person` VALUES (43, 49, 'gugun', '098701234567533', 'bri', 'rek_OEpNVWFQTWZCRkk4V1RZMm1RZ3lldz09.jpg');
INSERT INTO `rekening_person` VALUES (44, 50, 'BRIGITA MB', '7685123321', 'BCA', 'rek_ckh4dmV4L01XVCs0RjYyZVRKRlVQdz09.jpg');
INSERT INTO `rekening_person` VALUES (45, 51, 'brigita mb', '456137895', 'BCA', 'rek_MEJvNHRxeGZLR29UZ3k0WFU4SXFVQT09.jpg');
INSERT INTO `rekening_person` VALUES (46, 52, 'ANDRI', '7897158478', 'BCA', 'rek_UUV6SnRkT1YrUXpVeEZmRFZuV25qZz09.jpg');
INSERT INTO `rekening_person` VALUES (47, 53, 'EKO', '3681709337', 'BCA', 'rek_WnVhN1huZU1HM0hlQ0V5WHdnWEhLUT09.png');
INSERT INTO `rekening_person` VALUES (48, 54, 'penns', '9876543456', 'mandiri', 'rek_SG5qQlVTRE9OMVpSajB1NlFoVGxidz09.jpg');
INSERT INTO `rekening_person` VALUES (49, 55, 'mandiri', '233251', 'ehe', 'rek_b2JGejJCQUpIRExGS00wVEZFaVN5QT09.jpg');
INSERT INTO `rekening_person` VALUES (50, 56, 'gigi', '987601234567533', 'bri', 'rek_dHBXOXhNWUwyRE0wWWJCK2huc01iUT09.jpg');
INSERT INTO `rekening_person` VALUES (51, 57, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (52, 58, 'kaka', '082301000777522', 'bri', NULL);
INSERT INTO `rekening_person` VALUES (53, 59, 'afandi', '345678909876542', 'bri', NULL);
INSERT INTO `rekening_person` VALUES (54, 60, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (55, 61, 'kuku', '098701234567533', 'bri', NULL);
INSERT INTO `rekening_person` VALUES (56, 62, 'sam', '8766578776', 'mandiri', NULL);
INSERT INTO `rekening_person` VALUES (57, 63, 'MANDIRI', '78623867836', 'FGDR', 'rek_QmNzbTliZzRiMFFlUkt3QU1aN05Vdz09.jpg');
INSERT INTO `rekening_person` VALUES (58, 64, 'sam', '0987656789', 'mandiri', NULL);
INSERT INTO `rekening_person` VALUES (59, 65, 'koko', '098701678542522', 'bri', 'rek_RnBCaGNBOWNzNi90cksvRHpTVDlwUT09.jpg');
INSERT INTO `rekening_person` VALUES (60, 66, 'Fransiskus Bokko\'', '341301003621532', 'BRI', 'rek_elk2NDkwbjNVNnRxeHBaa3pObmNKUT09.jpeg');
INSERT INTO `rekening_person` VALUES (61, 67, 'kiko', '098701567435511', 'bri', 'rek_d25icm8wTzVWQ3h0aXF2aWVqL3dTdz09.jpg');
INSERT INTO `rekening_person` VALUES (62, 68, 'MANDIRI', '52465746', 'ADADEH', 'rek_alkwRUFqWnRteWlNWklNWkNQbUlaUT09.jpg');
INSERT INTO `rekening_person` VALUES (63, 69, 'well', '0987777000', 'mandiri', 'rek_RHpxUzlZYlNzaDRNWSthU0t2dy90UT09.jpg');
INSERT INTO `rekening_person` VALUES (64, 70, 'SESILIA DIAN PAERENG', '341301046758534', 'BRI', NULL);
INSERT INTO `rekening_person` VALUES (65, 71, 'dfdggfg', '22324345', 'bri', 'rek_NHE2SWs0ZXBIbW1MbUJXNVJvTkM0Zz09.png');
INSERT INTO `rekening_person` VALUES (66, 72, 'Rafael', '7895555', 'Bca', 'rek_L01ySjMrbU5tTWlpaU1JZjd2dkdodz09.jpg');
INSERT INTO `rekening_person` VALUES (67, 73, 'SUARDI', '205401001240531', 'BRI', 'rek_TEJVME5oU2JqaUJpSjdZdTM4UWtlQT09.jpg');
INSERT INTO `rekening_person` VALUES (68, 74, 'Satriyo Pratama Putra', '1700003829466', 'Mandiri', 'rek_dXJSNEh3R0tvV3MzUVhXWUViS3FJdz09.jpg');
INSERT INTO `rekening_person` VALUES (69, 75, 'FITRI INDRAJULIANI R', '1700002335754', 'MANDIRI', 'rek_YU1xaEdvMVhIa1RReEhPQTVERnpWQT09.jpg');
INSERT INTO `rekening_person` VALUES (70, 76, 'Muhammad Ikbal', '1700001275175', 'Mandiri', 'rek_UjNSSnZXOHYzUjhBOC9ETlduWHZFQT09.jpg');
INSERT INTO `rekening_person` VALUES (71, 77, 'SUDIRMAN', '802901007226538', 'BRI', 'rek_a29ROFRxZEc1ODgrQStEc281Rk4xQT09.jpg');
INSERT INTO `rekening_person` VALUES (72, 78, 'Eyhf', '61738383', 'Bri', 'rek_YWRJWVZpeVFpeXZRckZrQUpIcWF2Zz09.jpg');
INSERT INTO `rekening_person` VALUES (73, 79, 'Tri ari wibowo saputro', '7890291826', 'BCA', 'rek_ZUJDQVZkMkpBWXdLQklZOEtBaFFhQT09.jpg');
INSERT INTO `rekening_person` VALUES (74, 80, '-', '0', '-', 'rek_SFNtMjMwVmRnUGJvUkNhN1VYVXlzdz09.jpg');
INSERT INTO `rekening_person` VALUES (75, 81, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (76, 82, 'SRIWANA', '006401058455500', 'BRI', 'rek_V1N5ZEphekhIU0FPZCtMS2hySm1nQT09.jpeg');
INSERT INTO `rekening_person` VALUES (77, 83, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (78, 84, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (79, 85, 'NURLIANTI', '305001014981533', 'BRI', 'rek_YTlyVENuYUxveVROM3REWURNQ2tEUT09.jpg');
INSERT INTO `rekening_person` VALUES (80, 86, 'Solekah', '252010111961537', 'BRI', 'rek_djNueklYdDcxWW90azNGVFlhbmk4UT09.jpg');
INSERT INTO `rekening_person` VALUES (81, 87, 'HS.TASWIN', '494001031751533', 'BRI', 'rek_bGlldmlPTW00THRueVlCVW9SeWpwZz09.jpeg');
INSERT INTO `rekening_person` VALUES (82, 88, 'H.JAMALUDDIN MIDE', '503801000743503', 'BRI', 'rek_TzB1SWNxVGlzcmxjQVNGdkE2bHBQUT09.jpg');
INSERT INTO `rekening_person` VALUES (83, 89, 'RIBKA PADANG', '1700004297689', 'MANDIRI', 'rek_VWRpcWQxMUZzUnF5am5YOTlRQ3M4Zz09.jpeg');
INSERT INTO `rekening_person` VALUES (84, 90, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (85, 91, 'RISMAWATY RUSTAM', '021801018084508', 'BRI', 'rek_Wmx5UUpPbm9QVlF4NVh4bG5xMWNLdz09.jpeg');
INSERT INTO `rekening_person` VALUES (86, 92, 'DODY WILLIAM ROSALDI', '1540015520004', 'MANDIRI', NULL);
INSERT INTO `rekening_person` VALUES (87, 93, 'YUNUS', '1740000400663', 'BANK MANDIRI', NULL);
INSERT INTO `rekening_person` VALUES (88, 94, 'LEDY AMPULEMBANG', '171401002047501', 'BRI', 'rek_aWhDbWNFL2ZWY3FIb1pPa2RlMHc3UT09.jpg');
INSERT INTO `rekening_person` VALUES (89, 95, 'Hj Nursinah', '1520002172787', 'Mandiri', 'rek_a2FIOUpETUMyYUx5VkJNb2VJSFlYQT09.jpg');
INSERT INTO `rekening_person` VALUES (90, 96, 'ROSIANA LOMO', '1700000857577', 'BANK MANDIRI', 'rek_UU5SY3ZNcmI3cnpxQThtdzBGRGZmQT09.jpeg');
INSERT INTO `rekening_person` VALUES (91, 97, 'tresia rona samma', '0318382398', 'BNI', 'rek_bnhtb3VodzcwV29FUTFTd3JNcG5KUT09.jpeg');
INSERT INTO `rekening_person` VALUES (92, 98, 'Rubak Fransiskus Xaverius', '494401008698534', 'BRI', 'rek_eXNxL1F5Rk9CQ0h6cUZJUkhSNGhBZz09.jpeg');
INSERT INTO `rekening_person` VALUES (93, 99, 'HAMZAH', '791301000097538', 'BRI', 'rek_UTdybERmU3dlNHhTZGJDR0xpRk5UUT09.jpeg');
INSERT INTO `rekening_person` VALUES (94, 100, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (95, 101, 'DAMARIS PAKAN', '494701022652538', 'BRI', 'rek_VFZ4a3pwKzhUY2Q1cEtVY0VZTEcvdz09.jpeg');
INSERT INTO `rekening_person` VALUES (96, 102, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (97, 103, 'JARWO EDI KUSUMO', '1370011076607', 'MANDIRI', 'rek_d3k0VWJCUGtRUG54cmN2Y0lRZXVIUT09.jpg');
INSERT INTO `rekening_person` VALUES (98, 104, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (99, 105, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (100, 106, 'April ma\'ruf.SH', '7890337656', 'BCA', 'rek_SnJ1dDU5bUxqcC9NT1dZMTgzVnRNUT09.jpg');
INSERT INTO `rekening_person` VALUES (101, 107, 'MUHAMMAD YUSUF', '8460200181', 'BCA PAREPARE', 'rek_OFNnUDJER3g2VmRncDBZeEFyTzd3dz09.jpeg');
INSERT INTO `rekening_person` VALUES (102, 108, 'BAHERIAH', '888888', 'BCA', 'rek_bk5EaTBibFJEYnpJeUh0MlVwdnFFZz09.jpg');
INSERT INTO `rekening_person` VALUES (103, 109, 'Agus Wijaya', '7390228729', 'BCA', 'rek_emhYK0pmcURrUzh2K29iQzBmNXd5QT09.jpg');
INSERT INTO `rekening_person` VALUES (104, 110, 'AMIRULLAH', '510101028926534', 'BRI', 'rek_UTQwMFYxK0Fia3RsejRya0ErSWl1UT09.jpg');
INSERT INTO `rekening_person` VALUES (105, 111, 'FATMAWATI ANWAR RAUF', '7891094845', 'BCA', 'rek_SG9tbU82OXlDWDl3TzJmNE13WFZtdz09.jpeg');
INSERT INTO `rekening_person` VALUES (106, 112, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (107, 113, 'Putri syahruni', '3625260676', 'Danamon', 'rek_ZEJ1MWY0Z1V1T0NRMG9KOGd3eEl0UT09.jpg');
INSERT INTO `rekening_person` VALUES (108, 114, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (109, 115, 'Felix Antonio Bombing', '1700001019797', 'MANDIRI', NULL);
INSERT INTO `rekening_person` VALUES (110, 116, 'EKAWANTO SABA', '174000335224', 'MANDIRI', 'rek_bmg5Um1rT1RBUDFGSTVLUUJVTFA4UT09.jpeg');
INSERT INTO `rekening_person` VALUES (111, 117, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (112, 118, 'Fitri Indrajuliani', '1700002335754', 'Mandiri', 'rek_K2dNOHFCTnRQYldvcFp4aDhZOHVmUT09.jpg');
INSERT INTO `rekening_person` VALUES (113, 119, 'Aa', '1111111111111111111', 'Aa', 'rek_OUp0Z1lwdG5EbzZRZEpuZFliSmE3dz09.jpg');
INSERT INTO `rekening_person` VALUES (114, 120, 'thaug', '76237829013848', 'bri', NULL);
INSERT INTO `rekening_person` VALUES (115, 121, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (116, 122, 'Zaenab', '011101034262502', 'BRI', NULL);
INSERT INTO `rekening_person` VALUES (117, 123, 'Akbar Tanjung Nurdin', '492201023758535', 'BRI', 'rek_dld6ZHNxVHNvZkY5dDhwUEVuS1d4dz09.jpg');
INSERT INTO `rekening_person` VALUES (118, 124, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (119, 125, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (120, 126, 'WAHIDA NUR', '890101000000534', 'BRI', NULL);
INSERT INTO `rekening_person` VALUES (121, 127, 'PATRIK GIRIK ALLO', '494401017463536', 'BRI', 'rek_NXlpY0N3SUliUGtMQkFRWjBIUzkvZz09.jpeg');
INSERT INTO `rekening_person` VALUES (122, 128, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (123, 129, 'Satriyo Pratama Putra', '1700003829466', 'Mandiri', 'rek_a25uLzBrUnlSWjZSZzB6TTVhaGg4Zz09.jpeg');
INSERT INTO `rekening_person` VALUES (124, 130, 'JEAN', '3900550218', 'BCA', NULL);
INSERT INTO `rekening_person` VALUES (125, 131, 'SYARIFAH ELIDAYANTI', '004701051651509', 'BRI', 'rek_RDdoVXIzZE5QOXdtY0h2eDZEMGQ5QT09.jpeg');
INSERT INTO `rekening_person` VALUES (126, 132, 'HERMANTO STEVEN LISU ALLO', '743101879898532', 'BRI', 'rek_MEtEQmZ3aWRoVzV3dndDQ3VCN3Mvdz09.jpeg');
INSERT INTO `rekening_person` VALUES (127, 133, 'WAHYU HASWADI', '8460288950', 'BCA', 'rek_QlNRQ1ExNFExakl1b1U0QzZqbFRxQT09.jpeg');
INSERT INTO `rekening_person` VALUES (128, 134, 'JARWO EDI KUSUMO', '341301565656533', 'BRI', NULL);
INSERT INTO `rekening_person` VALUES (129, 135, 'YUZAK SALOMBE', '505401012124533', 'BRI', NULL);
INSERT INTO `rekening_person` VALUES (130, 136, 'FATMAWATI ANWAR RAUF', '78901094845', 'BCA', NULL);
INSERT INTO `rekening_person` VALUES (131, 137, 'Wilmar Raden Batara', '1700004570994', 'Mandiri', 'rek_aUlRbFJoMk5IODdYYzdTMVpVNGVBQT09.jpeg');
INSERT INTO `rekening_person` VALUES (132, 138, 'Eko Andriyanto', '3418010029988536', 'BRI', NULL);
INSERT INTO `rekening_person` VALUES (133, 139, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (134, 140, 'Satriyo Pratama Putra', '1700003829466', 'MANDIRI', 'rek_Wk1nR0ExYTRjREhCZk1Da1ZGYktCdz09.jpeg');
INSERT INTO `rekening_person` VALUES (135, 141, 'ASNITA BARA', '1540015694098', 'MANDIRI', NULL);
INSERT INTO `rekening_person` VALUES (136, 142, '12344567', '45567788', 'Bri', 'rek_eDk1U3hUZnppN0FLeUZSQ25TQnl4Zz09.jpg');
INSERT INTO `rekening_person` VALUES (137, 143, 'Muhammad Ikbal', '1700001275175', 'Mandiri', 'rek_ZWhqaGtYdTNKZDN2bUE5Z1FUcUZmQT09.jpg');
INSERT INTO `rekening_person` VALUES (138, 144, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (139, 145, 'Arini Puspita R', '1700000855985', 'Mandiri', 'rek_SVo4Ym9BK3lybEFuRkVBeVZJM2c4Zz09.jpg');
INSERT INTO `rekening_person` VALUES (140, 146, 'Nikodemus Sigala', '1700004661033', 'MANDIRI', 'rek_MmVwUUtkRVlEVWhJMDM2WW9rNmdGQT09.jpg');
INSERT INTO `rekening_person` VALUES (141, 147, 'Roswaty', '5095125741', 'BCA', 'rek_dlI1MXMvamdoOTIyVlQ0YWdkbW4vQT09.jpg');
INSERT INTO `rekening_person` VALUES (142, 148, 'Daniel Aldani', '1520014392985', 'Mandiri', 'rek_VVNmZERFSnEwY3M3cUVpc05rY0xTUT09.jpg');
INSERT INTO `rekening_person` VALUES (143, 149, 'MAEMUNA', '370613527', 'BCA', 'rek_WHJYK3JaUUwrWXlKYmZWN296RnV5Zz09.jpg');
INSERT INTO `rekening_person` VALUES (144, 150, 'muhammad thaib', '1740001146398', 'MANDIRI', NULL);
INSERT INTO `rekening_person` VALUES (145, 151, 'APNER KRISTIAN', '654301000777435', 'BRI', NULL);
INSERT INTO `rekening_person` VALUES (146, 152, 'AHMAD IBRAHIM', '380601003334500', 'BRI', 'rek_Vnc0NEo3UlJ3V28wK2lnZG1HSGQ5dz09.jpeg');
INSERT INTO `rekening_person` VALUES (147, 153, 'RIDWAN', '7990215400', 'BCA', 'rek_K0I5SFUzdGpXWUZTc0s5NlZhOU4yUT09.jpg');
INSERT INTO `rekening_person` VALUES (148, 154, 'MUKHTAR ACO, SH', '1700004584532', 'Mandiri', 'rek_Rm9NOWMzc0d5S3lNSlBVYzRZNnJDZz09.jpg');
INSERT INTO `rekening_person` VALUES (149, 155, 'NURMALA.HR', '746901011307535', 'BRI', NULL);
INSERT INTO `rekening_person` VALUES (150, 156, 'reprianus', '341301046464533', 'BRI', 'rek_a3ROQ1V1L3FYUmxZczd2QUlFN0V2dz09.jpg');
INSERT INTO `rekening_person` VALUES (151, 157, 'stela h rompas', '1500006678609', 'mandiri', 'rek_Mng4azFEazJmYzJhOU96ejRtZWEvZz09.jpg');
INSERT INTO `rekening_person` VALUES (152, 158, 'fathuddin', '7890137606', 'BCA', NULL);
INSERT INTO `rekening_person` VALUES (153, 159, 'ELI', '341301010208537', 'BRI', NULL);
INSERT INTO `rekening_person` VALUES (154, 160, 'eduarto agung patasik', '7990297660', 'bca', NULL);
INSERT INTO `rekening_person` VALUES (155, 161, 'Ainun', '557689234', 'Bca', 'rek_MjVPeTVNOW9TeWhjdnNTalcwaFNMdz09.jpg');
INSERT INTO `rekening_person` VALUES (156, 162, 'Muhammad juryansyah', '0115195307', 'Bca', NULL);
INSERT INTO `rekening_person` VALUES (157, 163, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (158, 164, 'Esty Podang Sakkung', '1700004702431', 'Mandiri', NULL);
INSERT INTO `rekening_person` VALUES (159, 165, 'bokko', '000000000000000', 'bri', NULL);
INSERT INTO `rekening_person` VALUES (160, 166, 'bca', '6435434', 'bca', 'rek_YndEbmQ4dlRzL1ZKKzFUVlpWa0xudz09.jpg');
INSERT INTO `rekening_person` VALUES (161, 167, 'dffgdf', '5454', 'hgfhfg', 'rek_WEN2SGo5UUR5NWJndmhhaGpGM1ZEZz09.jpg');
INSERT INTO `rekening_person` VALUES (162, 168, 'lia', '2345', 'bca', 'rek_bGp3Z21rRHYxOW1LOHdKTk5tZzhQZz09.jpg');
INSERT INTO `rekening_person` VALUES (163, 169, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (164, 170, '', '', '', NULL);
INSERT INTO `rekening_person` VALUES (165, 171, 'dgfs', '00', 'MANDIRI', 'rek_ZGl3V0FrNUJDdTdHZUovdy9iOENDZz09.jpeg');
INSERT INTO `rekening_person` VALUES (166, 172, 'aa', '12457890', 'bri', 'rek_ODBGMEkreEZ5YnpabExlSWpGYlJIUT09.jpg');
INSERT INTO `rekening_person` VALUES (167, 173, 'BERYL AVASSALOM SIGALA', '00000000000000', 'BRI', NULL);
INSERT INTO `rekening_person` VALUES (168, 174, 'Cheetah', '123456789012345', 'BRI', 'rek_Z21oR2dsUnZvMzJHUmJLY1FPcVNQQT09.jpg');
INSERT INTO `rekening_person` VALUES (169, 175, 'Cheetah Agency', '1234567898765432', 'BCA', 'rek_Q1J2dG9oMUp5UThCRndrRnBwbFFYdz09.jpg');
INSERT INTO `rekening_person` VALUES (170, 176, 'Cheetah Agency', '012347876889789', 'MANDIRI', 'rek_VWM2dzJia1JVRGdXdzA1a1ZGQnRSUT09.jpg');
INSERT INTO `rekening_person` VALUES (171, 177, 'firman', '000', 'MANDIRI', 'rek_b3hsazJQWG4vNXVMNjUwU01wR005QT09.jpeg');
INSERT INTO `rekening_person` VALUES (172, 178, 'ddsadsa', '83484832784932', 'BCA', 'rek_OWhubFlaWlpDSUhDRzMyR0hBQUJhZz09.PNG');

-- ----------------------------
-- Table structure for setting_financial
-- ----------------------------
DROP TABLE IF EXISTS `setting_financial`;
CREATE TABLE `setting_financial`  (
  `id_financial` int(11) NOT NULL,
  `deposit_status` enum('on','off') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `deposit_min` bigint(11) NULL DEFAULT NULL,
  `deposit_max` bigint(11) NULL DEFAULT NULL,
  `withdraw_status` enum('on','off') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `withdraw_min` bigint(11) NULL DEFAULT NULL,
  `withdraw_max` bigint(11) NULL DEFAULT NULL,
  `invesment_royalti` int(11) NULL DEFAULT NULL,
  `invesment_kontrak` int(11) NULL DEFAULT NULL,
  `invesment_profit` int(11) NULL DEFAULT NULL,
  `invesment_min` bigint(11) NULL DEFAULT NULL,
  `invesment_max` bigint(11) NULL DEFAULT NULL,
  `invesment_status` enum('on','off') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `biaya_admin` bigint(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_financial`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of setting_financial
-- ----------------------------
INSERT INTO `setting_financial` VALUES (999, 'on', 1000000, 1000000000, 'on', 100000, 10000000, 20, 6, 1, 1000000, 0, 'on', 150000);

-- ----------------------------
-- Table structure for setting_rekening
-- ----------------------------
DROP TABLE IF EXISTS `setting_rekening`;
CREATE TABLE `setting_rekening`  (
  `id_rekening` int(11) NOT NULL AUTO_INCREMENT,
  `nama_rekening` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_rekening` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bank` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `is_delete` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `created` datetime NULL DEFAULT NULL,
  `modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_rekening`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of setting_rekening
-- ----------------------------
INSERT INTO `setting_rekening` VALUES (1, 'Irfan', '2832183821', 'BNI', '1', '2019-10-29 03:11:03', NULL);
INSERT INTO `setting_rekening` VALUES (2, 'PT. CHEETAH BINTANG LIMA', '064201001903302', 'BRI', '0', '2019-10-31 01:07:31', '2019-11-16 13:47:58');
INSERT INTO `setting_rekening` VALUES (3, 'PT CHEETAH BINTANG LIMA', '1740002771111', 'MANDIRI', '0', '2019-11-16 13:48:45', NULL);
INSERT INTO `setting_rekening` VALUES (4, 'PT CHEETAH BINTANG LIMA', '7685591111', 'BCA', '0', '2019-11-16 13:49:17', NULL);

-- ----------------------------
-- Table structure for setting_system
-- ----------------------------
DROP TABLE IF EXISTS `setting_system`;
CREATE TABLE `setting_system`  (
  `id_setting_system` int(11) NULL DEFAULT NULL,
  `title` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telepon1` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telepon2` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `background` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of setting_system
-- ----------------------------
INSERT INTO `setting_system` VALUES (999, 'PT. CHEETAH BINTANG LIMA', 'cheetahbintang5@gmail.com', '0411-4101629', '085240362883', 'JL. TUN ABD RAZAK KOMP RUKO CITRALAND BLOK F NO.8 GOWA, SULAWESI-SELATAN', 'background-login.jpeg');

-- ----------------------------
-- Table structure for tb_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin`  (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telepon` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `level` enum('admin','superadmin') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `is_active` enum('n','y') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'n',
  `is_delete` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `created` datetime NULL DEFAULT NULL,
  `modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES (1, 'Hasby Support', 'admin@mail.com', '082348577797', 'admin', '$2y$10$vQSIqxXayAUcfM71Knhr7emUdYdxTsgMlrNjk1iDaQrchDHoXpqe6', 'TWJMQ0k3MmgybWg5NzYwUVorUlBRZz09', 'superadmin', 'y', '0', '2019-09-15 23:50:04', '2019-11-16 03:08:57');
INSERT INTO `tb_admin` VALUES (2, 'admin IT', 'pengguna@mail.com', '085288882994', 'pengguna', '$2y$10$uWMnbbIKcjBEF2fbdOxqyuDcqt9dMOc3sIBcbl/ntiILz0PCqySue', 'QXErRjdHMis5azUzWktUckt1THpBZz09', 'admin', 'y', '0', '2019-10-26 04:30:40', '2019-11-16 11:38:44');
INSERT INTO `tb_admin` VALUES (3, 'BRIGITA', 'thebrigit@gmail.com', '08534061828', 'ACCGITA', '$2y$10$vqfbyuHOjgB7MecgsIskpe40iwYaLx6X7r5xS2.duq7ErLkVnEPSq', 'dk90aW5VTDYxWXBPRVZaYkt0OHJzQT09', 'admin', 'y', '1', '2019-11-16 12:02:08', NULL);
INSERT INTO `tb_admin` VALUES (4, 'Mauliddya Wahyu', 'lidyamolly9@gmail.com', '081326902310', 'ACCLIDYA03', '$2y$10$lN/G5zA4oCis9xi70ll0.eSCBpaYb7hXiIYA2rLCq2YovCyo3WE0a', 'RjdYM3RlQ3g2Y0JMNTB3ZHZ0aU9CUT09', 'admin', 'y', '0', '2019-11-16 12:50:43', NULL);
INSERT INTO `tb_admin` VALUES (5, 'BRIGITA. MB', 'therebrigit@gmail.com', '085340618285', 'ACCGITA02', '$2y$10$L9gw2UlCxfYbL/W2JN71ze0Qc5qQ.EufgfReepXyC8BEaARgrCf9u', 'NWtQWm95aHVVTmdwQjRKS3IyMUNrQT09', 'admin', 'y', '0', '2019-11-16 13:14:59', NULL);
INSERT INTO `tb_admin` VALUES (6, 'Reski Amalia', 'kikisugito2@gmail.com', '085399255565', 'ACCKIKI01', '$2y$10$i9LeBM6YM2qFTz2ukyhbJ.Xz.gx7clOMrOeT.YNjcCQrqVEKKfigC', 'TzBRZjBtMVBSSnpBeFRJcHpRUVFmdz09', 'admin', 'y', '0', '2019-11-16 13:27:19', NULL);
INSERT INTO `tb_admin` VALUES (7, 'AUDI AULIAH ALI', 'audiaauliahali@gmail.com', '08875944053', 'ADMAUDI01', '$2y$10$XM1FYoPHL26.8hg9YMqw4OxA9MyflTADRN9ebzCAIMzb5VZ0Cfn8O', 'dmZ4eEh0dlVuSlhzdzI4bSs0ZnZwUT09', 'admin', 'y', '0', '2019-11-16 13:39:16', NULL);
INSERT INTO `tb_admin` VALUES (8, 'SUPRIADI', 'supriadisudi@gmail.com', '085241621378', 'ADMSUDI03', '$2y$10$rxhZyQITPtKp0/hwqg0xhuwIXkVvNZtBrlg9yIHGc9TR6qWVBRZd.', 'bmw5TGJFR3BhNjZ2ZU5md2x2VndVZz09', 'admin', 'y', '0', '2019-11-16 14:34:30', NULL);
INSERT INTO `tb_admin` VALUES (9, 'SAMSAM A. Md', 'samsamlanas11@gmail.com', '082144121144', 'ADMSAMSAM02', '$2y$10$jaKke.0SU7WymZ2f8RerdeVFbH94Kr8Mq7F1FCChGtTSGgCHh8AYq', 'S1F2MmFhRzIyOWsxNUMrYndvOGZCQT09', 'admin', 'y', '0', '2019-11-16 15:08:19', NULL);

-- ----------------------------
-- Table structure for tb_person
-- ----------------------------
DROP TABLE IF EXISTS `tb_person`;
CREATE TABLE `tb_person`  (
  `id_person` int(11) NOT NULL AUTO_INCREMENT,
  `is_parent` int(11) NULL DEFAULT NULL COMMENT 'id_person',
  `kode_person` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_level` int(11) NULL DEFAULT NULL,
  `nik` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `telepon1` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telepon2` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ukuran_baju` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `file_foto` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `file_ktp` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `waris_nama` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `waris_hubungan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `waris_telepon` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `waris_alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `is_active` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '1',
  `is_complate` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `is_complate_berkas` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created` datetime NULL DEFAULT NULL,
  `modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_person`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 179 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_person
-- ----------------------------
INSERT INTO `tb_person` VALUES (19, 0, 'FON-000001', 1, '1234567890987654', 'Muhammad Irfan Ibnu', 'makassar', '1991-12-01', '085288882995', '', 'founder01@mail.com', 'TNI', '', 'Jl. mannuruki rayaa', 'foto_VjU0L2ZOWUJQUjhNNVNoR3BtZE8xUT09.jpg', 'ktp_VjU0L2ZOWUJQUjhNNVNoR3BtZE8xUT09.jpg', 'Founder 01 rek', 'adik kandung', '085288882991', 'Jl. muhajirin raya', '1', '1', '1', NULL, '2019-11-03 15:05:08', '2019-11-03 15:06:59');
INSERT INTO `tb_person` VALUES (30, 19, 'COF-000001', 2, '7039141806910001', 'founder', 'Makassar', '2019-11-26', '+6282348577797', '', 'hasbihs111@gmail.com', 'tes', 'm', 'jl. Dr. Ratulangi . no.92', 'foto_aTRMRThtbFBVa0JQU2RrYVptelFUQT09.jpg', 'ktp_aTRMRThtbFBVa0JQU2RrYVptelFUQT09.jpg', 'qwwe', 'sdsd', '919282', 'hdsjhdjfh', '1', '1', '1', NULL, '2019-11-15 20:59:47', '2019-11-15 21:07:41');
INSERT INTO `tb_person` VALUES (31, 30, 'AGN-000001', 3, '7039141806910005', 'timang', 'Makassar', '2019-11-27', '+6282348577798', '', 'rusmankmajene1992@gmail.com', 'Petani', 'M', 'jl. Dr. Ratulangi . no.92', 'foto_MllHcHVzUDBjRkVNd2xDamJjOEZMZz09.jpg', 'ktp_MllHcHVzUDBjRkVNd2xDamJjOEZMZz09.jpg', 'Iwank', 'Sepupu', '090997877656554', 'Jl poros majene', '1', '1', '1', NULL, '2019-11-15 21:20:05', '2019-11-15 21:26:27');
INSERT INTO `tb_person` VALUES (32, 0, 'FON-000002', 1, '7371113787888977', 'BRIGITA MB', 'DILI', '1999-10-01', '085340618285', '', 'therebrigit@gmail.com', 'Mentri Keuangan', '', 'ASR BRIMOB PA\'BAENG-BAENG', NULL, NULL, 'LENA TAMPANG', 'IBU', '081242853647', 'ASR BRIMOB PA\'BAENG-BAENG', '1', '0', '0', NULL, '2019-11-16 16:54:07', '2019-11-16 16:58:09');
INSERT INTO `tb_person` VALUES (33, 0, 'FON-000003', 1, '2857692017593847', 'FELIX', 'malaysia', '1992-07-05', '082144121144', '', 'samsamlanas8@gmail.com', 'mahasiswa', '', 'pinrang', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-16 16:55:44', NULL);
INSERT INTO `tb_person` VALUES (34, 0, 'FON-000004', 1, '7377111101111223', 'AWALUDDIN', 'MALANG', '2019-11-04', '082231311317', '', 'lidyamolly9@gmail.com', 'DOKTER', '', 'JL TUN ABD RAZAK', NULL, NULL, 'lidya', 'anak kandung', '081326902310', 'jl tun abd razak', '1', '0', '0', NULL, '2019-11-16 16:55:52', NULL);
INSERT INTO `tb_person` VALUES (35, 0, 'FON-000005', 1, '7371014895530003', 'BU INDRA', 'MANADO', '1991-11-14', '08524162137', '', 'SUPRIADISUDI@GMAIL.COM', 'WIRASWASTA', '', 'MANADO', NULL, NULL, 'INDRI', 'ADEK', '085241621338', 'MANADO', '1', '0', '0', NULL, '2019-11-16 16:55:55', NULL);
INSERT INTO `tb_person` VALUES (36, 0, 'FON-000006', 1, '1234567890101668', 'AUDI UMUT', 'UJUNG PANDANG', '1997-12-27', '0845567345765', '987464231', 'AUDIVCVGIGHHG@GMAIL.COM', 'IMUT IMUT', '', 'ANTANG CITY', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-16 16:56:02', NULL);
INSERT INTO `tb_person` VALUES (37, 0, 'FON-000007', 1, '1234567891231234', 'sudirman', 'Mamuju', '1994-04-05', '085343123900', '', 'cheetah@gmail.com', 'mahasiswa', '', 'jl. batua raya 3 lr 2 no 14', NULL, NULL, 'kiki', 'ponakan', '085244666222', 'jln pongtiku', '1', '0', '0', NULL, '2019-11-16 16:56:22', NULL);
INSERT INTO `tb_person` VALUES (38, 35, 'COF-000002', 2, '7371256485640003', 'INDRI', 'MANADO', '1991-07-31', '085341621388', '', 'SUPRIADISUDII@GMAIL.COM', '', '', 'MANADO', NULL, NULL, 'INDRO', 'KAKAK', '085241621389', 'MANADO', '1', '0', '0', NULL, '2019-11-16 17:05:53', NULL);
INSERT INTO `tb_person` VALUES (39, 32, 'COF-000003', 2, '7467778888881234', 'BRIGITSSSS!', 'DILI', '1999-10-01', '085396090242', '', 'brigits@gmail.com', 'MENTRI KEUANGAN', '', 'ASR BRIMOB PABAENG BAENG', NULL, NULL, 'LENA TAMPANG', 'IBU KANDUNG', '08963516457', 'ASR BRIMOB PA\'BAENG-BAENG', '1', '0', '0', NULL, '2019-11-16 17:06:34', NULL);
INSERT INTO `tb_person` VALUES (40, 34, 'COF-000004', 2, '1234561234567891', 'babe', 'london', '1999-06-09', '081234567', '', 'babe123@gmail.com', 'pelaut', '', 'jl ingrris', NULL, NULL, 'debi', 'keponakan', '08190909012', 'jl inggris', '1', '0', '0', NULL, '2019-11-16 17:06:47', NULL);
INSERT INTO `tb_person` VALUES (41, 33, 'COF-000005', 2, '9457675648789098', 'Eka', 'toraja', '1991-10-04', '082345717114', '', 'ekatoraja@gmail.com', '', '', 'toraja', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-16 17:07:39', NULL);
INSERT INTO `tb_person` VALUES (42, 36, 'COF-000006', 2, '1546432567865432', 'AUDI IMUT', '27- 12-1997', '1997-12-27', '425453565754', '5347573864', 'AUDIAAULIAHALI@Gmail.com', 'dokter', '', 'adadeh', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-16 17:07:42', NULL);
INSERT INTO `tb_person` VALUES (43, 37, 'COF-000007', 2, '1234567891234567', 'dede', 'makassar', '2019-01-09', '082123456345', '', 'dede@gmail.com', 'guru', '', 'jalan hertasning', NULL, NULL, 'welly', 'ponakan', '087234657324', 'jln batua raya', '1', '0', '0', NULL, '2019-11-16 17:08:12', NULL);
INSERT INTO `tb_person` VALUES (44, 39, 'AGN-000002', 3, '1234567891011224', 'HESTY BHAYANGKARA', 'TORAJA', '1999-10-01', '089843585272', '', 'hesty@gmail.com', 'mentri keuangan', '', 'NIPA-NIPA', NULL, NULL, 'CAROLUS PRAWIRO', 'KAKAK KANDUNG', '081245785986389', 'NIPA-NIPA', '1', '0', '0', NULL, '2019-11-16 17:11:17', '2019-11-16 17:14:02');
INSERT INTO `tb_person` VALUES (45, 38, 'AGN-000003', 3, '7371125624150001', 'INDRO', 'MANADO', '1992-07-18', '085241621377', '', 'INDROWARKOP@GMAIL.COM', 'PENGAJAR', 'M', 'MANADO', 'foto_SmVod3JXOFZWeXRHNnpJNFBER3ZDdz09.jpg', 'ktp_SmVod3JXOFZWeXRHNnpJNFBER3ZDdz09.jpg', 'ANDRI', 'OM', '085241621889', 'MANADO', '1', '1', '1', NULL, '2019-11-16 17:11:29', '2019-11-16 17:29:00');
INSERT INTO `tb_person` VALUES (46, 42, 'AGN-000004', 3, '5763458978653456', 'AUDI CANTIK', 'KOREA', '1997-12-27', '53653735', '2754724', 'AUDICANTIK@GMAIL.COM', 'EHE', 's', 'HEHEHE ADA DEH', 'foto_RHc0U0hueHgwVDNUVGMrdEwzaFQwdz09.jpg', 'ktp_RHc0U0hueHgwVDNUVGMrdEwzaFQwdz09.jpg', 'sembarang', 'kepo', '7556878764', 'adadeh', '1', '1', '1', NULL, '2019-11-16 17:13:47', '2019-11-16 17:30:17');
INSERT INTO `tb_person` VALUES (47, 40, 'AGN-000005', 3, '1234567891023456', 'wahyu', 'papua', '1890-02-20', '0812355364', '', 'wahyu123@gmail.com', 'petani', 'xxl', 'jl. melati mawar', 'foto_bnZ3Z3NUK2hTeG1mdXUrOGY1UEVMdz09.jpg', 'ktp_bnZ3Z3NUK2hTeG1mdXUrOGY1UEVMdz09.jpg', 'dia', 'anak kandung', '08967553356', 'jl mawar melati', '1', '1', '1', NULL, '2019-11-16 17:13:51', '2019-11-16 17:28:37');
INSERT INTO `tb_person` VALUES (48, 41, 'AGN-000006', 3, '2567890475893678', 'samsam', 'pinrang', '1990-11-14', '098765432123', '096473625265', 'samsam@gmail.com', 'mahasiswa', 'S', 'pinrang', 'foto_NEFRR1ZlWUJGZnliNWpJNU1oT1JBUT09.jpg', 'ktp_NEFRR1ZlWUJGZnliNWpJNU1oT1JBUT09.jpg', 'WELL', 'SUAMI', '098765342567', 'MALANG', '1', '1', '1', NULL, '2019-11-16 17:14:33', '2019-11-16 17:30:03');
INSERT INTO `tb_person` VALUES (49, 43, 'AGN-000007', 3, '1234567899876543', 'gugun', 'maros', '2019-03-13', '086234657890', '', 'gugun@gmail.com', 'mahasiswa', 'm', 'jln maros bandara', 'foto_OEpNVWFQTWZCRkk4V1RZMm1RZ3lldz09.jpg', 'ktp_OEpNVWFQTWZCRkk4V1RZMm1RZ3lldz09.jpg', 'suardi', 'mertua baik', '085242675897', 'jln veteran saja', '1', '1', '1', NULL, '2019-11-16 17:15:08', '2019-11-16 17:28:21');
INSERT INTO `tb_person` VALUES (50, 39, 'AGN-000008', 3, '5645412154321234', 'hesty bhayangkara', 'makassar', '1999-10-01', '081143562783', '', 'hestybhygkara@gmail.com', 'mentri pendidikan', 's', 'Jl. nipa-nipa', 'foto_ckh4dmV4L01XVCs0RjYyZVRKRlVQdz09.JPG', 'ktp_ckh4dmV4L01XVCs0RjYyZVRKRlVQdz09.JPG', 'angelica', 'Adik kandung', '085396090242', 'nipa-nipa', '1', '1', '1', NULL, '2019-11-16 17:24:51', '2019-11-16 17:28:16');
INSERT INTO `tb_person` VALUES (51, 50, 'MEM-000001', 4, '5646787743221212', 'theresia brigits', 'roma', '1999-10-01', '0984356784890', '', 'theresiabrigita@gmail.com', 'adminstarsi', 'S', 'nipa-nipa', 'foto_MEJvNHRxeGZLR29UZ3k0WFU4SXFVQT09.jpg', 'ktp_MEJvNHRxeGZLR29UZ3k0WFU4SXFVQT09.jpg', 'pinius', 'ayah kandung', '085396090242', 'nipa-nipa', '1', '1', '1', NULL, '2019-11-16 17:44:29', '2019-11-16 17:50:37');
INSERT INTO `tb_person` VALUES (52, 45, 'MEM-000002', 4, '7371254878970002', 'ANDRI', 'MAMUJU', '1995-07-13', '085241621987', '', 'SUPRIADI@GMAIL.COM', 'GURU', 'M', 'MAMUJU', 'foto_UUV6SnRkT1YrUXpVeEZmRFZuV25qZz09.jpg', 'ktp_UUV6SnRkT1YrUXpVeEZmRFZuV25qZz09.jpg', 'HASBI', 'SUPPORT', '085241621589', 'MAMUJU', '1', '1', '1', NULL, '2019-11-16 17:44:39', '2019-11-16 17:51:49');
INSERT INTO `tb_person` VALUES (53, 47, 'MEM-000003', 4, '1234567123457091', 'EKO', 'SEOUL', '2000-02-01', '08123232323', '', 'EKO123@GMAIL.COM', 'GURU BAHASA', 'xxl', 'SEOUL', 'foto_WnVhN1huZU1HM0hlQ0V5WHdnWEhLUT09.jpg', 'ktp_WnVhN1huZU1HM0hlQ0V5WHdnWEhLUT09.jpg', 'LIDYA', 'KEPONAKAN', '0811223322', 'SEOUL', '1', '1', '1', NULL, '2019-11-16 17:45:11', '2019-11-17 02:25:17');
INSERT INTO `tb_person` VALUES (54, 48, 'MEM-000004', 4, '0987654321234567', 'PENNS', 'MAKASSAR', '1985-11-30', '098765432123', '098765678987', 'PENNS@gmail.com', 'petani', 'xl', 'makassar', 'foto_SG5qQlVTRE9OMVpSajB1NlFoVGxidz09.jpg', 'ktp_SG5qQlVTRE9OMVpSajB1NlFoVGxidz09.jpg', 'sam', 'adik', '098765677890', 'makassar', '1', '1', '1', NULL, '2019-11-16 17:45:17', '2019-11-16 17:50:44');
INSERT INTO `tb_person` VALUES (55, 46, 'MEM-000005', 4, '9999999999999999', 'kak well', 'korea', '2018-02-13', '975544', '8976754543', 'wellwellwell@gmail.com', 'trader', 's', 'malang city', 'foto_b2JGejJCQUpIRExGS00wVEZFaVN5QT09.jpg', 'ktp_b2JGejJCQUpIRExGS00wVEZFaVN5QT09.jpg', 'kk hasby', 'pacaran', '13243242', 'ada aja', '1', '1', '1', NULL, '2019-11-16 17:45:21', '2019-11-16 17:50:59');
INSERT INTO `tb_person` VALUES (56, 49, 'MEM-000006', 4, '1234561234561234', 'gigi', 'makassar', '2014-02-11', '085123456765', '', 'gigi@gmail.com', 'bambong', 'l', 'jln mangkasara', 'foto_dHBXOXhNWUwyRE0wWWJCK2huc01iUT09.jpg', 'ktp_dHBXOXhNWUwyRE0wWWJCK2huc01iUT09.jpg', 'gogos', 'mertua sangkkang', '086123546879', 'jkl palopo', '1', '1', '1', NULL, '2019-11-16 17:45:38', '2019-11-16 17:50:38');
INSERT INTO `tb_person` VALUES (57, 0, 'FON-000008', 1, '3333333333333333', 'samsam', 'ujungpandang', '2010-12-13', '8897578578', '', 'samsamehe@gmail.com', 'admin', '', 'eqwqwqw', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-16 19:15:48', NULL);
INSERT INTO `tb_person` VALUES (58, 0, 'FON-000009', 1, '1234560987651344', 'kaka', 'mamuju', '2009-01-22', '085244344556', '', 'kaka@gmail.com', 'labambong', '', 'jln makassar saja', NULL, NULL, 'sudi', 'mertua sakko', '089776555777', 'jln toli toli', '1', '0', '0', NULL, '2019-11-16 19:17:16', NULL);
INSERT INTO `tb_person` VALUES (59, 0, 'FON-000010', 1, '4568467890987634', 'afandi', 'makassar', '1989-01-14', '098765432123', '', 'fandi@gmail.com', 'petani', '', 'makassar', NULL, NULL, 'sam', 'adik', '098765432124', 'pinrang', '1', '0', '0', NULL, '2019-11-16 19:35:33', NULL);
INSERT INTO `tb_person` VALUES (60, 57, 'COF-000008', 2, '6666666666666666', 'ESSE', 'PINRANG', '1979-07-11', '55544566', '890878979', 'ESSESAMSAM@GMAIL.COM', 'ADMIN EHE', '', 'CITRA LAND', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-16 19:36:56', NULL);
INSERT INTO `tb_person` VALUES (61, 58, 'COF-000009', 2, '5678903456781234', 'kuku', 'buangin', '2011-03-22', '088453656876', '', 'kuku@gmail.com', 'mahasiswa', '', 'jln hertasning', NULL, NULL, 'sudu', 'saudara', '081234675987', 'jln perjalanan', '1', '0', '0', NULL, '2019-11-16 19:38:45', NULL);
INSERT INTO `tb_person` VALUES (62, 59, 'COF-000010', 2, '9876543567892345', 'vira', 'makassar', '1988-07-14', '123456789098', '', 'vira@gmail.com', 'sales', '', 'jl. toddopuli makassar', NULL, NULL, 'sam', 'saudara', '098765432198', 'jl. toddopoli makassar', '1', '0', '0', NULL, '2019-11-16 19:39:43', NULL);
INSERT INTO `tb_person` VALUES (63, 60, 'AGN-000009', 3, '4542462348654326', 'ESSEMANTAP', 'KOREA', '2000-08-28', '567456746', '56453646678', 'ESSEMANTAP@GMAIL.COM', 'ADMIN LAGI ADMIN LAGI', 'S', 'DIMANAYA', 'foto_QmNzbTliZzRiMFFlUkt3QU1aN05Vdz09.jpg', 'ktp_QmNzbTliZzRiMFFlUkt3QU1aN05Vdz09.jpg', 'SIAPAYA', 'MAUTAUYA', '5667465456', 'KEPOYA', '1', '1', '1', NULL, '2019-11-16 19:40:49', '2019-11-16 19:42:36');
INSERT INTO `tb_person` VALUES (64, 62, 'AGN-000010', 3, '2345678765456789', 'ida', 'makassar', '1980-12-31', '089098987898', '', 'ida@gmail.com', 'art', '', 'jl. bonto duri 1', NULL, NULL, 'sam', 'anak', '098987898746', 'jl. toddopuli makassar', '1', '0', '0', NULL, '2019-11-16 19:42:56', NULL);
INSERT INTO `tb_person` VALUES (65, 61, 'AGN-000011', 3, '9876541234560987', 'koko', 'bulan', '2019-04-05', '082345876123', '', 'koko@gmail.com', 'lakerja', 'l', 'jln panakkukang', 'foto_RnBCaGNBOWNzNi90cksvRHpTVDlwUT09.jpg', 'ktp_RnBCaGNBOWNzNi90cksvRHpTVDlwUT09.jpg', 'sulas', 'adik kandung', '087564321908', 'jkl ablam', '1', '1', '1', NULL, '2019-11-16 19:43:16', '2019-11-16 19:44:55');
INSERT INTO `tb_person` VALUES (66, 45, 'MEM-000007', 4, '7318050907620002', 'Fransiskus Bokko\'', 'RT PORA', '1991-06-19', '081242164235', '', 'FransiskusBokko\'@gmail.com', 'KARYAWAN', 'M', 'RT PORA', 'foto_elk2NDkwbjNVNnRxeHBaa3pObmNKUT09.jpeg', 'ktp_elk2NDkwbjNVNnRxeHBaa3pObmNKUT09.jpeg', '-', '-', '0', '-', '1', '1', '1', NULL, '2019-11-16 19:44:01', '2019-11-18 09:20:05');
INSERT INTO `tb_person` VALUES (67, 65, 'MEM-000008', 4, '0970981234568765', 'kiko', 'matahari', '2019-05-20', '087123098654', '', 'kiko@gmail.com', 'lakerja', 'xl', 'jln tamalate', 'foto_d25icm8wTzVWQ3h0aXF2aWVqL3dTdz09.jpg', 'ktp_d25icm8wTzVWQ3h0aXF2aWVqL3dTdz09.jpg', 'samurai', 'adik baik', '085244765111', 'jln bahagia', '1', '1', '1', NULL, '2019-11-16 19:49:42', '2019-11-16 20:01:26');
INSERT INTO `tb_person` VALUES (68, 63, 'MEM-000009', 4, '1111111111111111', 'ADELUPA', 'PANTAI LOSARI', '2010-03-17', '5624525', '5652657', 'ADELUPA@GMAIL.COM', 'NASSAMI ADMIN', 's', 'DIHATIMU', 'foto_alkwRUFqWnRteWlNWklNWkNQbUlaUT09.jpg', 'ktp_alkwRUFqWnRteWlNWklNWkNQbUlaUT09.jpg', 'CIPU', 'PACARAN', '5426652', 'JKHDGkabj', '1', '1', '1', NULL, '2019-11-16 19:50:11', '2019-11-16 19:51:14');
INSERT INTO `tb_person` VALUES (69, 64, 'MEM-000010', 4, '1234567890987898', 'samsam', 'malaysia', '1992-10-04', '087987896789', '098789789876', 'sam@gmail.com', 'mahasiswa', 's', 'makassar', 'foto_RHpxUzlZYlNzaDRNWSthU0t2dy90UT09.jpg', 'ktp_RHpxUzlZYlNzaDRNWSthU0t2dy90UT09.jpg', 'well', 'saudara', '0988998766', 'malang', '1', '1', '1', NULL, '2019-11-16 19:52:18', '2019-11-16 19:53:34');
INSERT INTO `tb_person` VALUES (70, 45, 'MEM-000011', 4, '7318055508960001', 'SESILIA DIAN PAERENG', 'MAKALE', '1900-07-12', '0000', '', 'SESILIA@GMAIL.COM', 'MMM', 'M', 'MAKALE', NULL, NULL, '-', '-', '0', '-', '1', '1', '0', NULL, '2019-11-16 20:07:20', '2019-11-16 20:10:20');
INSERT INTO `tb_person` VALUES (71, 63, 'MEM-000012', 4, '7309141806910002', 'INDRA', 'PARE', '1989-11-22', '0855555555', '', 'adm.cheetahbintang5@gmail.com', 'dsdsd', 's', 'sddfgfhghhk', 'foto_NHE2SWs0ZXBIbW1MbUJXNVJvTkM0Zz09.jpeg', 'ktp_NHE2SWs0ZXBIbW1MbUJXNVJvTkM0Zz09.jpg', 'dfdff', 'sdsds', '02588888', 'dfd', '1', '1', '1', NULL, '2019-11-17 02:06:16', '2019-11-17 02:09:03');
INSERT INTO `tb_person` VALUES (72, 30, 'AGN-000012', 3, '7309141806910007', 'Rafael', 'Luwuk banggai', '1979-07-18', '082348577797', '', 'hasbyhs@gmail.com', 'Swasta', 'L', 'Jl. Dr ratulangi', 'foto_L01ySjMrbU5tTWlpaU1JZjd2dkdodz09.jpg', 'ktp_L01ySjMrbU5tTWlpaU1JZjd2dkdodz09.jpg', 'Aco', 'Spp', '08552255', 'Jl djdjdjd', '1', '1', '1', NULL, '2019-11-18 00:07:24', '2019-11-18 00:15:05');
INSERT INTO `tb_person` VALUES (73, 0, 'FON-000011', 1, '7371031911660003', 'SUARDI', 'UJUNG PANDANG', '1966-11-19', '085242551468', '0', 'suardijsd@gmail.com', 'TENTARA NASIONAL INDONESIA', 'XL', 'JL. BATUA RAYA III LR 2 NO 14', 'foto_TEJVME5oU2JqaUJpSjdZdTM4UWtlQT09.jpg', 'ktp_TEJVME5oU2JqaUJpSjdZdTM4UWtlQT09.jpg', 'YUDHI PRATAMA SUARDI', 'ANAK KANDUNG', '085240900766', 'JL. BATUA RAYA III LR 2 NO 14', '1', '1', '1', NULL, '2019-11-21 02:03:23', '2019-11-23 17:36:24');
INSERT INTO `tb_person` VALUES (74, 0, 'FON-000012', 1, '7318052611940005', 'SATRIYO PRATAMA PUTRA', 'MAKALE', '1994-11-26', '082348036026', '085298334082', 'satriyonovianne@gmail.com', 'Pegawai BUMN', 'L', 'ASPOL MAKALE', 'foto_dXJSNEh3R0tvV3MzUVhXWUViS3FJdz09.jpg', 'ktp_dXJSNEh3R0tvV3MzUVhXWUViS3FJdz09.jpg', 'Hilda Adelia', 'Istri', '0852299667299', 'Jl Sida Kampung Baru Makale Tana Toraja', '1', '1', '1', NULL, '2019-11-21 02:58:24', '2019-11-23 16:15:05');
INSERT INTO `tb_person` VALUES (75, 0, 'FON-000013', 1, '7372035207830002', 'FITRI INDRAJULIANI.R', 'PAREPARE', '1983-07-12', '082323333975', '082344483331', 'fitriindrajuliani12@gmail.com', 'WIRASWASTA', 'M', 'JL. ABU BAKAR LAMBOGO KEC. SOREANG KOTA PAREPARE', 'foto_YU1xaEdvMVhIa1RReEhPQTVERnpWQT09.jpg', 'ktp_YU1xaEdvMVhIa1RReEhPQTVERnpWQT09.jpg', 'ABDULLAH DAFA ALMER DZAKY', 'ANAK', '085214055583', 'JL KEJAYAAN RAYA NO 17', '1', '1', '1', NULL, '2019-11-21 03:02:52', '2019-11-23 16:50:54');
INSERT INTO `tb_person` VALUES (76, 0, 'FON-000014', 1, '7315012305900001', 'MUHAMMAD IKBAL', 'PINRANG', '1990-05-23', '085292365995', '082344483332', 'muhammadikbal166@gmail.com', 'Marketing Cheetah', 'L', 'BELA-BELAWA KEC. SUPPA KAB. PINRANG', 'foto_UjNSSnZXOHYzUjhBOC9ETlduWHZFQT09.jpg', 'ktp_UjNSSnZXOHYzUjhBOC9ETlduWHZFQT09.jpg', 'Fitri Indra Juliani', 'Istri', '082323333975', 'Jl. Kejayaan Raya No. 17', '1', '1', '1', NULL, '2019-11-21 03:06:09', '2019-11-23 16:50:16');
INSERT INTO `tb_person` VALUES (77, 0, 'FON-000015', 1, '7602100304650001', 'SUDIRMAN', 'TASOKKO', '1996-02-16', '082335525352', '', 'sudirmanmateng@gmail.com', 'WIRASWASTA', 'M', 'JL. WIJAYA KUSUMA I KEC. RAPPOCINI KOTA MAKASSAR', 'foto_a29ROFRxZEc1ODgrQStEc281Rk4xQT09.jpg', 'ktp_a29ROFRxZEc1ODgrQStEc281Rk4xQT09.jpg', 'MASNIA', 'SAUDARA KANDUNG', '085342450661', 'ANTALILI KAROSSA', '1', '1', '1', NULL, '2019-11-21 03:09:11', '2019-11-23 17:08:22');
INSERT INTO `tb_person` VALUES (78, 0, 'FON-000016', 1, '7372040710860004', 'ACHMAD HIDAYAT', 'PAREPARE', '1996-11-07', '082349654565', '', 'adzan.collection62@gmail.com', 'swasta', 'XL', 'JL. PINISI NO. 78 KEC. BACUKIKI BARAT KOTA PAREPARE', 'foto_YWRJWVZpeVFpeXZRckZrQUpIcWF2Zz09.jpg', 'ktp_YWRJWVZpeVFpeXZRckZrQUpIcWF2Zz09.jpg', 'Ahmad', 'Saya', '08234569961937', 'Jl. Pinisi', '1', '1', '1', NULL, '2019-11-21 03:13:30', '2019-11-23 00:09:13');
INSERT INTO `tb_person` VALUES (79, 0, 'FON-000017', 1, '7371021701900001', 'TRI ARI WIBOWO SAPUTRO', 'UJUNG PANDANG', '1990-01-17', '081995999805', '', 'triariwibowo293@gmail.com', 'Satpam', 'XL', 'JL. C.WASIH ASMAT BLOK A NO. 1 KEC. MAMAJANG KOTA MAKASSAR', 'foto_ZUJDQVZkMkpBWXdLQklZOEtBaFFhQT09.jpg', 'ktp_ZUJDQVZkMkpBWXdLQklZOEtBaFFhQT09.jpg', 'Aditya erlangga saputro', 'Anak', '081991180514', 'Jln cendrawasih asrama mattoanging blok A no 1', '1', '1', '1', NULL, '2019-11-21 03:16:45', '2019-11-23 16:56:15');
INSERT INTO `tb_person` VALUES (80, 0, 'FON-000018', 1, '7371061305950008', 'CHEETAH BINTANG LIMA', 'MAKASSAR', '2019-11-21', '085240362883', '', 'cheetahspk1@gmail.com', '-', 'M', 'JL.TUN ABDUL RAZAK KOMP RUKO CITRALAND BLOK F-8', 'foto_SFNtMjMwVmRnUGJvUkNhN1VYVXlzdz09.jpg', 'ktp_SFNtMjMwVmRnUGJvUkNhN1VYVXlzdz09.jpg', '-', '-', '0', '-', '1', '1', '1', NULL, '2019-11-21 03:34:28', '2019-11-23 19:55:43');
INSERT INTO `tb_person` VALUES (81, 80, 'COF-000011', 2, '7309141806910001', 'HASBI HASBULLAH SAID', 'MANGKOSO', '1991-06-18', '082348577797', '', 'hasbhs111@gmail.com', '', '', 'JL.DR.RATULANGI', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-21 03:52:50', NULL);
INSERT INTO `tb_person` VALUES (82, 80, 'COF-000012', 2, '7372045311740002', 'SRIWANA', 'PAREPARE', '1974-11-13', '085242217995', '', 'sriwanamulyansyah@gmail.com', 'WIRASWASTA', 'L', 'JL. BAU MASSEPE KEC. BACUKIKI BARAT KOTA PAREPARE', 'foto_V1N5ZEphekhIU0FPZCtMS2hySm1nQT09.jpeg', 'ktp_V1N5ZEphekhIU0FPZCtMS2hySm1nQT09.jpeg', 'MUHAMMAD VIRGIAWAN MAULANA JASMIN', 'ANAK', '082150350916', 'JL. BAU MASSEPE KEC. BACUKIKI BARAT KOTA PAREPARE', '1', '1', '1', NULL, '2019-11-22 01:58:58', '2019-11-23 16:43:13');
INSERT INTO `tb_person` VALUES (83, 80, 'COF-000013', 2, '7371031911660005', 'SUARDI', 'UJUNG PANDANG', '1966-11-19', '085242551468', '', 'adhysupriadi@outlook.com', '', '', 'JL. BATUA RAYA III LR 2 NO. 14 KEC. MANGGALA KOTA MAKASSAR', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-22 02:07:56', NULL);
INSERT INTO `tb_person` VALUES (84, 80, 'COF-000014', 2, '3276065804810001', 'WIDYA SRI HANDAYANI', 'LAMPUNG', '1981-04-18', '087784458581', '', 'radya.sastrawangi81@gmail.com', '', '', 'JL. GARUDA RAYA NO. 39 KEC. BEJI KOTA DEPOK', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-22 02:10:26', NULL);
INSERT INTO `tb_person` VALUES (85, 80, 'COF-000015', 2, '7371100406840024', 'EKO ANDRIYANTO', 'KLATEN', '1984-07-06', '082189060705', '081354714059', 'evandrey888@gmail.com', 'TNI AD', 'XL', 'JL. C.WASIH ASR MATTOANGIN KEC. MAMAJANG KOTA MAKASSAR', 'foto_YTlyVENuYUxveVROM3REWURNQ2tEUT09.jpg', 'ktp_YTlyVENuYUxveVROM3REWURNQ2tEUT09.jpg', 'NURLIANTI', 'ISTRI', '081343865033', 'JL. C.WASIH ASR MATTOANGIN KEC. MAMAJANG KOTA MAKASSAR', '1', '1', '1', NULL, '2019-11-22 02:13:42', '2019-11-23 19:40:39');
INSERT INTO `tb_person` VALUES (86, 80, 'COF-000016', 2, '7304034309750001', 'SOLEKAH', 'CIREBON', '1975-09-03', '081340084804', '085348216479', 'solekaheka04@gmail.com', 'Ibu Rumah Tangga', 'XL', 'BTN PEPABRI KEC. BINAMU KAB. JENEPONTO', 'foto_djNueklYdDcxWW90azNGVFlhbmk4UT09.jpg', 'ktp_djNueklYdDcxWW90azNGVFlhbmk4UT09.jpg', 'Safwatul Ulum', 'Anak', '081340084804', 'BTN BUMI LONTARA INDAH KAB.JENEPONTO', '1', '1', '1', NULL, '2019-11-22 02:16:24', '2019-11-23 17:30:55');
INSERT INTO `tb_person` VALUES (87, 77, 'COF-000017', 2, '3172013105610001', 'H.S. TASWIN K. ALATAS', 'PAREPARE', '1961-05-31', '085318677777', '085256499112', 'taswinalatas11@gmail.com', 'WIRASWASTA', 'XXL', 'JL. ASIS BUSTAM SALEPPA KEC. BANGGAE KAB. MAJENE', 'foto_bGlldmlPTW00THRueVlCVW9SeWpwZz09.jpeg', 'ktp_bGlldmlPTW00THRueVlCVW9SeWpwZz09.jpeg', 'SYARIFAH ELIDAYANTI', 'ANAK', '085256499112', 'JL.M.SALEH BANJAR LING. KAMPUNG BARU KAB. MAJENE', '1', '1', '1', NULL, '2019-11-22 02:18:38', '2019-11-23 17:33:14');
INSERT INTO `tb_person` VALUES (88, 77, 'COF-000018', 2, '7604033011720001', 'H. JAMALUDDIN MIDE', 'WONOMULYO', '1972-11-30', '081342177788', '082343358545', 'jjamaluddinmide@gmail.com', 'WIRASWASTA', 'XL', 'JL. KESADARAN KEC. WONOMULYO KAB. POLEWALI MANDAR', 'foto_TzB1SWNxVGlzcmxjQVNGdkE2bHBQUT09.jpg', 'ktp_TzB1SWNxVGlzcmxjQVNGdkE2bHBQUT09.jpg', 'RIJAL', 'ANAK', '082343358545', 'JL. KESADARAN KEC. WONOMULYO KAB. POLEWALI MANDAR', '1', '1', '1', NULL, '2019-11-22 02:20:41', '2019-11-23 17:30:44');
INSERT INTO `tb_person` VALUES (89, 80, 'COF-000019', 2, '7318056404740004', 'RIBKA PADANG', 'PALOPO', '1974-04-24', '081355619225', '082348303330', 'ribkapadang7@gmail.com', 'PNS', 'M', 'JL. BUNTU PANTAN KEC. MAKALE KAB. TANA TORAJA', 'foto_VWRpcWQxMUZzUnF5am5YOTlRQ3M4Zz09.jpeg', 'ktp_VWRpcWQxMUZzUnF5am5YOTlRQ3M4Zz09.jpeg', 'SILO AMADEUS RISSING', 'ANAK', '082152467686', 'JL. BUNTU PANTAN KEC. MAKALE KAB. TANA TORAJA', '1', '1', '1', NULL, '2019-11-22 02:22:19', '2019-11-23 16:25:54');
INSERT INTO `tb_person` VALUES (90, 80, 'COF-000020', 2, '3515136307740006', 'SITI MARDIYAH', 'TUBAN', '1974-07-23', '081330034837', '', 'siti.mardiyah1235@gmail.com', '', '', 'GRIYO TAMAN ASRI HB-08 KEC. TAMAN KAB. SIDOARJO', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-22 02:24:18', NULL);
INSERT INTO `tb_person` VALUES (91, 80, 'COF-000021', 2, '7371116008860001', 'RISMAWATY RUSTAM, SE', 'UJUNG PANDANG', '1986-08-20', '085298056325', '08114124300', 'rismawatyrustam200886@gmail.com', 'PNS', 'XL', 'KOMP BTN DWI DHARMA BLK A. 19/B MAKASSAR', 'foto_Wmx5UUpPbm9QVlF4NVh4bG5xMWNLdz09.jpeg', 'ktp_Wmx5UUpPbm9QVlF4NVh4bG5xMWNLdz09.jpeg', 'AHMAD IBRAHIM', 'SUAMI', '085340860604', 'KOMP BTN DWI DHARMA BLK A. 19/B MAKASSAR', '1', '1', '1', NULL, '2019-11-22 02:26:48', '2019-11-23 21:36:03');
INSERT INTO `tb_person` VALUES (92, 80, 'COF-000022', 2, '9102012312850002', 'DODY WILLIAM ROSALDI', 'UJUNG PANDANG', '1985-12-23', '081342787231', '', 'asnitabara04@gmail.com', 'SWASTA', 'XL', 'SINIKMA KEC. WAMENA KAB. JAYAWIJAYA', 'foto_Ky9VUTVDTmZGalFSSUprK1ZWZnp0Zz09.jpg', NULL, 'ASNITA BARA', 'ISTRI', '081318272350', 'WAMENA', '1', '1', '0', NULL, '2019-11-22 02:28:53', '2019-11-23 20:45:36');
INSERT INTO `tb_person` VALUES (93, 80, 'COF-000023', 2, '7371120910720004', 'YUNUS', 'TORAJA', '1972-10-09', '085298747931', '', '101972.yns@gmail.com', 'KARYAWAN SUASTA', 'L', 'JL. INSPEKSI PAM KEC. MANGGALA KOTA MAKASSAR', 'foto_U0YvTURjSkRkTVF6MDZScHRVL3kydz09.jpg', NULL, 'APNER KRISTIAN', 'ANAK', '085777458010', 'JL.INSPEKSI PAM KEC.MANGGALA KOTA MAKASSAR', '1', '1', '0', NULL, '2019-11-22 02:30:45', '2019-11-23 20:31:31');
INSERT INTO `tb_person` VALUES (94, 80, 'COF-000024', 2, '9115051911790001', 'YUZAK SALOMBE', 'UJUNG PANDANG', '1979-11-19', '081368341212', '081248365388', 'ciptasains@gmail.com', 'Swasta', 'M', 'NONOMI KEC. WAROPEN BAWAH KAB. WAROPEN', 'foto_aWhDbWNFL2ZWY3FIb1pPa2RlMHc3UT09.jpg', 'ktp_aWhDbWNFL2ZWY3FIb1pPa2RlMHc3UT09.jpg', 'LEDY AMPULEMBANG', 'ISTRI', '081240388070', 'NONOMI KEC. WAROPEN BAWAH KAB. WAROPEN', '1', '1', '1', NULL, '2019-11-22 02:33:01', '2019-11-23 16:41:16');
INSERT INTO `tb_person` VALUES (95, 80, 'COF-000025', 2, '7371095211600005', 'HJ NURSINAH', 'MAKASSAR', '1960-11-12', '082198184959', '082291609119', 'maryani_yunus@yahoo.co.id', 'IRT', 'L', 'JL. HERTASNING VI NO. 24 KEC. RAPPOCINI KOTA MAKASSAR', 'foto_a2FIOUpETUMyYUx5VkJNb2VJSFlYQT09.jpg', 'ktp_a2FIOUpETUMyYUx5VkJNb2VJSFlYQT09.jpg', 'Muhammad thaib', 'Anak', '085931978187', 'Jl Hertasning 6 no 24', '1', '1', '1', NULL, '2019-11-22 02:34:40', '2019-11-23 16:31:20');
INSERT INTO `tb_person` VALUES (96, 75, 'COF-000026', 2, '7318056706640001', 'Dra. ROSIANA LOMO. M.Pd', 'PALOPO', '1964-06-27', '085299659661', '', 'rosilomorosiana@gmail.com', 'PNS', 'L', 'PANTAN KEC. MAKALE KAB. TANA TORAJA', 'foto_UU5SY3ZNcmI3cnpxQThtdzBGRGZmQT09.jpeg', 'ktp_UU5SY3ZNcmI3cnpxQThtdzBGRGZmQT09.jpeg', 'DONI WILSON APRIEL', 'ANAK KANDUNG', '082293840848', 'PANTAN KEC. MAKALE KAB. TANA TORAJA', '1', '1', '1', NULL, '2019-11-22 02:37:04', '2019-11-23 16:58:16');
INSERT INTO `tb_person` VALUES (97, 80, 'COF-000027', 2, '7326072503910002', 'EDUARTO AGUNG PATASIK', 'UJUNG PANDANG', '1991-03-25', '082290475468', '', 'eduarto.agungp25@gmail.com', 'Kariawan Swasta', 'XL', 'KOMP. PERM MANGGA 3 BLOK B 4 NO. 5 KEC. BIRINGKANAYYA KOTA MAKASSAR', 'foto_bnhtb3VodzcwV29FUTFTd3JNcG5KUT09.jpeg', 'ktp_bnhtb3VodzcwV29FUTFTd3JNcG5KUT09.jpeg', 'Tresia Rona Samma', 'ibu kandung', '082394176664', 'KOMP. PERM MANGGA 3 BLOK B 4 NO. 5 KEC. BIRINGKANAYYA KOTA MAKASSAR', '1', '1', '1', NULL, '2019-11-22 02:38:42', '2019-11-23 16:41:18');
INSERT INTO `tb_person` VALUES (98, 75, 'COF-000028', 2, '7318122712600003', 'RUBAK FRANSISKUS XAVERIUS', 'MAKALE', '1960-12-27', '081355794877', '082271465214', 'yanpatrik24@gmail.com', 'PNS', 'XL', 'GE\'TENGAN KEC. MENGKENDEK KAB. TANA TORAJA', 'foto_eXNxL1F5Rk9CQ0h6cUZJUkhSNGhBZz09.jpeg', 'ktp_eXNxL1F5Rk9CQ0h6cUZJUkhSNGhBZz09.jpeg', 'Patrik Girik Allo', 'Anak', '081210999660', 'GE\'TENGAN KEC. MENGKENDEK KAB. TANA TORAJA', '1', '1', '1', NULL, '2019-11-22 02:43:33', '2019-11-23 16:42:21');
INSERT INTO `tb_person` VALUES (99, 80, 'COF-000029', 2, '7602011310810001', 'HAMZAH', 'MAPILLI', '1981-10-13', '081241511663', '', 'zarwani0405@gmail.com', 'PNS', 'M', 'JL. NELAYAN KEC. SIMBORO KAB. MAMUJU', 'foto_UTdybERmU3dlNHhTZGJDR0xpRk5UUT09.jpeg', 'ktp_UTdybERmU3dlNHhTZGJDR0xpRk5UUT09.jpeg', 'NURMALA', 'ISTRI', '082123542582', 'LINGK.  TULU LAYONGA KEL. BANGGAE TIMUR', '1', '1', '1', NULL, '2019-11-22 02:45:18', '2019-11-23 16:33:26');
INSERT INTO `tb_person` VALUES (100, 80, 'COF-000030', 2, '5103050511820005', 'KRIZARD CAMERON KIKI KOROMPIS', 'MAKASSAR', '1982-11-05', '083151753891', '', 'krizard.cameronkorompis@gmail.com', '', '', 'DUSUN SUNGAI SAWAK KEC. SUNGAI TEBELIAN KAB. WINTANG', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-22 02:46:57', NULL);
INSERT INTO `tb_person` VALUES (101, 75, 'COF-000031', 2, '7326154612580002', 'DAMARIS PAKAN', 'RANTEPAO', '1968-12-06', '085397124674', '', 'cheetahtorut@gmail.com', 'IRT', 'L', 'KESE KEC. KESU\' KAB. TORAJA UTARA', 'foto_VFZ4a3pwKzhUY2Q1cEtVY0VZTEcvdz09.jpeg', 'ktp_VFZ4a3pwKzhUY2Q1cEtVY0VZTEcvdz09.jpeg', 'LIEBER', 'ANA KANDUNG', '081380669328', 'KESE KEC. KESU\' KAB. TORAJA UTARA', '1', '1', '1', NULL, '2019-11-22 02:48:53', '2019-11-23 16:38:09');
INSERT INTO `tb_person` VALUES (102, 80, 'COF-000032', 2, '7371116412900004', 'VERONICA DESI ANTASARI', 'UJUNG PANDANG', '1990-12-10', '081226460157', '', 'bambangprasetya82@gmail.com', '', '', 'BTN DEWI KUMALASARI BLOK AD. 8/5 MAKASSAR', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-22 02:53:12', '2019-11-23 16:23:48');
INSERT INTO `tb_person` VALUES (103, 80, 'COF-000033', 2, '3402162004800010', 'JARWO EDI KUSUMO', 'KULON PROGO', '1980-04-20', '081227878278', '', 'jarwoedikusumo@gmail.com', 'WIRASWASTA', 'XL', 'PERUM BANGUNJIWO SEJAHTERA 53 - BANTUL', 'foto_d3k0VWJCUGtRUG54cmN2Y0lRZXVIUT09.jpg', 'ktp_d3k0VWJCUGtRUG54cmN2Y0lRZXVIUT09.jpg', 'FATIMAH AZZAHRO', 'ANAK', '081391349155', 'PERUM BANGUNJIWO SEJAHTERA 53 - BANTUL', '1', '1', '1', NULL, '2019-11-22 02:55:15', '2019-11-23 16:46:19');
INSERT INTO `tb_person` VALUES (104, 80, 'COF-000034', 2, '7371092511620002', 'HAMZAH', 'KALOSI', '1962-11-25', '085298839349', '', 'hmzah1962@gmail.com', '', '', 'JL. TAMANGAPA RAYA NO. 12', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-22 02:57:00', NULL);
INSERT INTO `tb_person` VALUES (105, 80, 'COF-000035', 2, '9203010406870004', 'SUPARDI', 'BLITAR', '1987-06-04', '08119462006', '', 'ardi.0687@gmail.com', '', '', 'JL. GAJAH MADA KEC.FAK-FAK KAB. FAK FAK', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-22 02:59:37', NULL);
INSERT INTO `tb_person` VALUES (106, 80, 'COF-000036', 2, '7310041311630004', 'ALFIL MA\'RUF,SH', 'TARAKAN', '1963-11-13', '082195028689', '082195028689', 'alfil1963@gmail.com', 'Marketing Cheetah', 'Xl', 'JL. AMBARALA TIMUR NO. 28 KEC. PANGKAJENE KAB. PANGKEP', 'foto_SnJ1dDU5bUxqcC9NT1dZMTgzVnRNUT09.jpg', 'ktp_SnJ1dDU5bUxqcC9NT1dZMTgzVnRNUT09.jpg', 'Randhytia', 'Anak kandung', '111111', 'Jl.Ambarala timur no 8 Pangkep', '1', '1', '1', NULL, '2019-11-22 03:01:10', '2019-11-23 18:01:27');
INSERT INTO `tb_person` VALUES (107, 80, 'COF-000037', 2, '7372011207660001', 'MUHAMMAD YUSUF', 'PAREPARE', '1966-07-12', '088246336444', '081342611207', 'Muhyusufsmkn2@gmail.com', 'PNS ( GURU )', 'xl', 'JL. KEJAYAN BLOK G NO. 25 KEC. BACUKIKI KOTA PARE-PARE', 'foto_OFNnUDJER3g2VmRncDBZeEFyTzd3dz09.jpeg', 'ktp_OFNnUDJER3g2VmRncDBZeEFyTzd3dz09.jpeg', 'MUHAMMAD YUSRI', 'ANAK', '085213259017', 'JL. KEJAYAN BLOK G NO. 25 KEC. BACUKIKI KOTA PARE-PARE', '1', '1', '1', NULL, '2019-11-22 03:02:38', '2019-11-23 16:37:04');
INSERT INTO `tb_person` VALUES (108, 80, 'COF-000038', 2, '7371074106640004', 'BAHERIAH', 'BONE', '1964-06-01', '085395292105', '081356285295', 'maymunarahim24@gmail.com', 'IBU RUMAH TANGGA', 'L', 'JL. SUNU LR IA NO. 28 KOTA MAKASSAR', 'foto_bk5EaTBibFJEYnpJeUh0MlVwdnFFZz09.JPG', 'ktp_bk5EaTBibFJEYnpJeUh0MlVwdnFFZz09.png', 'AULIAH MUTMAINNAH', 'ANAK', '085341740440', 'JL. SUNU LR IA NO. 28 KOTA MAKASSAR', '1', '1', '1', NULL, '2019-11-22 03:05:20', '2019-11-23 17:27:48');
INSERT INTO `tb_person` VALUES (109, 80, 'COF-000039', 2, '7309140108690002', 'AGUS WIJAYA', 'JAKARTA', '1969-08-01', '0811532030', '08991325611', 'agusw69@gmail.com', 'Wiraswasta', 'M', 'KOMP. BUMI PERMATA HIJAU ALAUDDIN JL. BUMI 5, Blok A3 No.9\r\nKel. Gunungsari, Kec. Rappocini\r\nMakassar - Sulawesi Selatan', 'foto_emhYK0pmcURrUzh2K29iQzBmNXd5QT09.jpg', 'ktp_emhYK0pmcURrUzh2K29iQzBmNXd5QT09.jpg', 'Wahida Nur', 'Istri', '0818582030', 'KOMP. BUMI PERMATA HIJAU ALAUDDIN JL. BUMI 5, Blok A3 No.9\r\nKel. Gunungsari, Kec. Rappocini\r\nMakassar - Sulawesi Selatan', '1', '1', '1', NULL, '2019-11-22 03:06:55', '2019-11-23 16:21:30');
INSERT INTO `tb_person` VALUES (110, 80, 'COF-000040', 2, '7308071302930001', 'AMIRULLAH', 'CADEA', '1993-02-13', '082350259304', '', 'evayuni138@gmail.com', 'IRT', 'XL', 'JL.CADEA RT 008/RW004\r\nKECAMATAN MARE', 'foto_UTQwMFYxK0Fia3RsejRya0ErSWl1UT09.jpg', 'ktp_UTQwMFYxK0Fia3RsejRya0ErSWl1UT09.jpg', 'NURDIN', 'SAUDARA', '082194942339', 'JL CADEA', '1', '1', '1', NULL, '2019-11-22 03:09:21', '2019-11-28 18:25:03');
INSERT INTO `tb_person` VALUES (111, 80, 'COF-000041', 2, '7371071901780007', 'CHAERUL AMIN', 'MAKASSAR', '1978-01-19', '085244440155', '08884307777', 'chaerulamin.cbl@gmail.com', 'WIRASWASTA', 'XL', 'JL. AR. HAKIM LR. SUANGGA KOTA MAKASSAR', 'foto_SG9tbU82OXlDWDl3TzJmNE13WFZtdz09.jpeg', 'ktp_SG9tbU82OXlDWDl3TzJmNE13WFZtdz09.jpeg', 'FATMAWATI ANWAR RAUF', 'ISTRI', '081245655868', 'JL. AR HAKIM LORONG SUANGGA', '1', '1', '1', NULL, '2019-11-22 03:10:48', '2019-11-23 16:31:12');
INSERT INTO `tb_person` VALUES (112, 80, 'COF-000042', 2, '7371065501820002', 'BALAIRUNG SARI', 'UJUNG PANDANG', '1982-01-15', '082348257510', '', 'fatih290711@gmail.com', '', '', 'JL. KALUMPANG NO. 10 KEC. BONTOALA KOTA MAKASSAR', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-22 03:12:19', NULL);
INSERT INTO `tb_person` VALUES (113, 81, 'AGN-000013', 3, '7309141806910004', 'Muh Awaluddin', 'Makassar', '1989-07-01', '+6282259219640', '', 'Awhal89@gmail.com', 'TNI AD', 'XXL', 'jl. Kijang no.57', 'foto_ZEJ1MWY0Z1V1T0NRMG9KOGd3eEl0UT09.jpg', 'ktp_ZEJ1MWY0Z1V1T0NRMG9KOGd3eEl0UT09.jpg', 'PUTRI SYAHRUNI', 'Istri', '082271565224', 'Jl.kijang no.57', '1', '1', '1', NULL, '2019-11-22 23:51:36', '2019-11-23 11:58:57');
INSERT INTO `tb_person` VALUES (114, 0, 'FON-000019', 1, '7171056803770001', 'MARLINA LIMBONG', 'MANADO', '1977-03-28', '085298012139', '', 'limbongina@gmail.com', '', '', 'LINGKUNGAN I KEC. PAAL DUA KOTA MANADO', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-23 14:27:19', NULL);
INSERT INTO `tb_person` VALUES (115, 0, 'FON-000020', 1, '7318271901840001', 'FELIX ANTONIO BOMBING', 'MAKALE', '1984-01-19', '082194927207', '', 'felixbombing21@gmail.com', 'Cheetah Full Timer', 'M', 'MENDETEK KEC. MAKALE UTARA KAB TANA TORAJA', NULL, NULL, 'Lisdawati Tangnga', 'Istri', '085242024483', 'Jl Pongtiku 471 Kel. Tambunan, Kec. Makale Utara Kab Tana Toraja Sulawesi Selatan', '1', '1', '0', NULL, '2019-11-23 14:30:15', '2019-11-23 16:40:15');
INSERT INTO `tb_person` VALUES (116, 115, 'COF-000043', 2, '7371092201860001', 'EKAWANTO SABA', 'BAU-BAU', '1986-01-22', '085299799979', '081527039', 'ekaputramandiri86@gmail.com', 'ADVOKAD', 'L', 'JL.ASPOL TELLO BARU', 'foto_bmg5Um1rT1RBUDFGSTVLUUJVTFA4UT09.jpeg', 'ktp_bmg5Um1rT1RBUDFGSTVLUUJVTFA4UT09.jpeg', 'wira', 'adek kandung', '0811448853', 'JL.ASPOL TELLO BARU', '1', '1', '1', NULL, '2019-11-23 14:42:42', '2019-11-23 20:08:55');
INSERT INTO `tb_person` VALUES (117, 114, 'COF-000044', 2, '7171056803770008', 'marlina limbong', 'manado', '2019-11-28', '085298012139', '', 'cheetahmanado@gmail.com', '', '', 'manado', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-23 17:30:32', NULL);
INSERT INTO `tb_person` VALUES (118, 75, 'COF-000045', 2, '7372035207830009', 'indra juliani R', 'parepare', '1983-07-12', '082323333975', '082344483331', 'indrajulianifitri@gmail.com', 'Wiraswasta', 'M', 'JL. ABU BAKAR LAMBOGO KEC. SOREANG KOTA PAREPARE', 'foto_K2dNOHFCTnRQYldvcFp4aDhZOHVmUT09.jpg', 'ktp_K2dNOHFCTnRQYldvcFp4aDhZOHVmUT09.jpg', 'Muhammad ikbal', 'Suami', '085259236595', 'Pinrang', '1', '1', '1', NULL, '2019-11-23 17:39:08', '2019-11-23 20:43:31');
INSERT INTO `tb_person` VALUES (119, 115, 'COF-000046', 2, '7328271901840001', 'Andy oliver bombing', 'makale', '2019-12-03', '082194927207', '', 'cheetahsesama@gmail.com', 'Kk', 'S', 'MENDETEK KEC. MAKALE UTARA KAB TANA TORAJA', 'foto_OUp0Z1lwdG5EbzZRZEpuZFliSmE3dz09.jpg', 'ktp_OUp0Z1lwdG5EbzZRZEpuZFliSmE3dz09.jpg', 'As', 'Aa', '111112212', 'As', '1', '1', '1', NULL, '2019-11-23 17:42:40', '2019-11-23 19:52:52');
INSERT INTO `tb_person` VALUES (120, 39, 'AGN-000014', 3, '1252122222221111', 'B', 'DILI', '2019-11-28', '096854635243', '', 'therebriguiwtfgc@gmail.com', 'admin', '', 'nipa-nipa', NULL, NULL, 'trhfhm', 'adik', '09978654323663', 'antang', '1', '0', '0', NULL, '2019-11-23 17:53:15', NULL);
INSERT INTO `tb_person` VALUES (121, 79, 'COF-000047', 2, '7371021701900009', 'tri ari wiobowo saputro', 'ujung pandang', '2019-11-25', '081995999805', '', 'Tria7146@gmail.com', '', '', 'JL. C.WASIH ASMAT BLOK A NO. 1 KEC. MAMAJANG KOTA MAKASSAR', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-23 18:09:08', NULL);
INSERT INTO `tb_person` VALUES (122, 78, 'COF-000048', 2, '7302025902900001', 'Zaenab', 'Bulukumba', '1990-02-19', '085242852679', '', 'Zaenabalsyam@gmail.com', 'Honorer', 'm', 'Dusun Samaturu\'e Desa Taccorong Kab. Bulukumba', 'foto_L1JRZUFLWmtZV3VKcDRCcDY2MmE0Zz09.jpg', 'ktp_L1JRZUFLWmtZV3VKcDRCcDY2MmE0Zz09.jpg', 'Achmad HIdayat', 'Suami', '082349654656', 'Gan Sari Minasa Upa', '1', '1', '0', NULL, '2019-11-23 18:17:35', '2019-11-23 20:45:35');
INSERT INTO `tb_person` VALUES (123, 121, 'AGN-000015', 3, '7304021407950003', 'AkbarTanjung Nurdin', 'Tanetea', '1995-07-14', '082195680216', '', 'akbartanjungnur14@gmail.com', 'Mahasiswa', 'S', 'jl. lanto dg pasewang - kota makassar', 'foto_dld6ZHNxVHNvZkY5dDhwUEVuS1d4dz09.jpeg', 'ktp_dld6ZHNxVHNvZkY5dDhwUEVuS1d4dz09.jpg', 'Rahmat', 'Kakak', '085299461282', 'Kab Jeneponto', '1', '1', '1', NULL, '2019-11-23 18:23:44', '2019-11-23 20:07:15');
INSERT INTO `tb_person` VALUES (124, 77, 'COF-000049', 2, '7602100304650003', 'Sudirman', 'makassar', '1994-01-15', '082335525352', '', 'cheetahsulbar1996@gmail.com', '', '', 'JL. WIJAYA KUSUMA I KEC. RAPPOCINI KOTA MAKASSAR', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-23 18:38:23', NULL);
INSERT INTO `tb_person` VALUES (125, 82, 'AGN-000016', 3, '7372040812990001', 'muhammad virgiawan', 'parepare', '1999-12-08', '082150350916', '', 'virgiawanmaulana125@gmail.com', 'Pelajar', '', 'Jl. Bau Massepe Kota Parepare', NULL, NULL, 'Sriwana', 'Ibu Kandung', '085259029298', 'Jl. Bau Massepe Kota Parepare', '1', '0', '0', NULL, '2019-11-23 18:38:30', NULL);
INSERT INTO `tb_person` VALUES (126, 109, 'AGN-000017', 3, '7309145612680003', 'WAHIDA NUR', 'MAROS', '1968-12-16', '0815330333', '', 'awsf1969@gmail.com', '', '', 'KOMP. BUMI PERMATA HIJAU ALAUDDIN JL. BUMI 5 BLOK', NULL, NULL, 'WAHIDA NUR', 'ADEK', '628991325611', 'JL. BUMI 5 BLOK', '1', '0', '0', NULL, '2019-11-23 18:42:09', NULL);
INSERT INTO `tb_person` VALUES (127, 98, 'AGN-000018', 3, '7318122401910005', 'PATRIK GIRIK ALLO', 'GE\'TENGAN', '1991-01-24', '081210999660', '082356833810', 'Aprinaja12@gmail.com', 'PELAJAR/MAHASISWA', 'L', 'GE\'TENGAN, RANTE KALUA\', MENGKENDEK, KABUPATEN TANA TORAJA', 'foto_NXlpY0N3SUliUGtMQkFRWjBIUzkvZz09.jpeg', 'ktp_NXlpY0N3SUliUGtMQkFRWjBIUzkvZz09.jpeg', 'PATRIK', 'ANAK', '081210999660', 'GE\'TENGAN, RANTE KALUA\', MENGKENDEK, KABUPATEN TANA TORAJA', '1', '1', '1', NULL, '2019-11-23 18:42:50', '2019-11-23 19:58:27');
INSERT INTO `tb_person` VALUES (128, 82, 'AGN-000019', 3, '7372041508750001', 'mulyansyah', 'nunukan', '1975-08-15', '085240122245', '', 'mulyansyah1975@gmail.com', 'wiraswasta', '', 'jl. bau maassepe kota parepare', NULL, NULL, 'Sriwana', 'istri', '085259029298', 'jl. bau maassepe kota parepare', '1', '0', '0', NULL, '2019-11-23 18:50:17', NULL);
INSERT INTO `tb_person` VALUES (129, 74, 'COF-000050', 2, '7318052611940006', 'Satriyo Pratama Putra', 'Makale', '1994-11-26', '082348036026', '', 'satriyopratamaputra@gmail.com', 'Pegawai BUMN', 'L', 'Aspol Makale Tana Toraja', 'foto_a25uLzBrUnlSWjZSZzB6TTVhaGg4Zz09.jpeg', 'ktp_a25uLzBrUnlSWjZSZzB6TTVhaGg4Zz09.jpeg', 'Hilda Adelia', 'Istri', '085299667299', 'Jl Sida Kampung Baru Makale Tana Toraja', '1', '1', '1', NULL, '2019-11-23 18:51:15', '2019-11-23 20:08:46');
INSERT INTO `tb_person` VALUES (130, 96, 'AGN-000020', 3, '7371135301820002', 'JEAN HERLIN MARTHEN', 'MAKASSAR', '1982-01-13', '08114601275', '', 'jhmarthen@gmail.com', 'KARYAWAN SWASTA', '', 'JL. PELITA RAYA LR.2 NO.1, KEL. BALLAPARANG, KAB. RAPPOCINI, MAKASSAR', NULL, NULL, 'JEAN', '', '08114601275', 'JL. PELITA RAYA LR.2 NO.1, KEL. BALLAPARANG, KAB. RAPPOCINI, MAKASSAR', '1', '0', '0', NULL, '2019-11-23 18:53:34', NULL);
INSERT INTO `tb_person` VALUES (131, 87, 'AGN-000021', 3, '7605016102860004', 'Hj. SYARIFAH', 'MAJENE', '1986-02-21', '085256499112', '085318677777', 'dayantisyarifaheli@gmail.com', 'WIRASWASTA', 'L', 'JL. M. SALEH BANJAR, LING KAMPUNG BARU', 'foto_RDdoVXIzZE5QOXdtY0h2eDZEMGQ5QT09.jpeg', 'ktp_RDdoVXIzZE5QOXdtY0h2eDZEMGQ5QT09.jpeg', 'H S TASWIN K ALATAS', 'AYAH KANDUNG', '6285318677777', 'JL. ASIS BUSTAM SALEPPA', '1', '1', '1', NULL, '2019-11-23 18:56:58', '2019-11-23 19:42:47');
INSERT INTO `tb_person` VALUES (132, 89, 'AGN-000022', 3, '7318053006950002', 'HERMANTO STEVEN LISU ALLO', 'MAUMERE', '1995-06-30', '085293924242', '', 'stevenarif123@gmail.com', 'MAHASISWA', 'M', 'RANO', 'foto_MEtEQmZ3aWRoVzV3dndDQ3VCN3Mvdz09.jpg', 'ktp_MEtEQmZ3aWRoVzV3dndDQ3VCN3Mvdz09.jpeg', 'RIBKA PADANG', 'TANTE', '6281355619225', 'JL. BUNTU PANTAN NO. 22', '1', '1', '1', NULL, '2019-11-23 19:05:02', '2019-11-23 19:20:13');
INSERT INTO `tb_person` VALUES (133, 107, 'AGN-000023', 3, '7372032202770003', 'WAHYU HASWADI', 'parepare', '1977-02-22', '085377776917', '', 'wahyuhaswadi77@gmail.com', 'pegawai negeri sipil', 'XXL', 'jl. laupe bukit harapan', 'foto_QlNRQ1ExNFExakl1b1U0QzZqbFRxQT09.jpeg', 'ktp_QlNRQ1ExNFExakl1b1U0QzZqbFRxQT09.jpeg', 'MUH. REZKY RAMADHAN', 'ANAK', '085200008734', 'jl. laupe bukit harapan', '1', '1', '1', NULL, '2019-11-23 19:10:37', '2019-11-23 20:51:39');
INSERT INTO `tb_person` VALUES (134, 103, 'AGN-000024', 3, '3471081509850001', 'FARISA BELLY VERNANDA', 'PAYUNGDADI', '1985-09-15', '6285743223437', '', 'Youngfarisi@gmail.com', 'MAHASISWA', '', 'JL. TIRTOIPURAN NO. 15', NULL, NULL, 'JARWO EDI KUSUMO', 'SAUDARA', '6281227878278', 'YOGYAKARTA', '1', '0', '0', NULL, '2019-11-23 19:11:05', NULL);
INSERT INTO `tb_person` VALUES (135, 94, 'AGN-000025', 3, '9115051911790002', 'YUZAK SALOMBE', 'UJUNG PANDANG', '1979-11-19', '081248365388', '', 'yuzaksalombe@gmail.com', 'KARYAWAN SWASTA', '', 'NONOMI, KEC. WAROPEN BAWAH, KAB. WAROPEN', NULL, NULL, 'SALOMBE', 'SEPUPU', '081248365388', 'NONOMI, KEC. WAROPEN BAWAH, KAB. WAROPEN', '1', '0', '0', NULL, '2019-11-23 19:15:56', NULL);
INSERT INTO `tb_person` VALUES (136, 111, 'AGN-000026', 3, '7371075508820004', 'FATMAWATI ANWAR RAUF', 'ujung pandang', '1982-08-15', '081245655868', '', 'anwarfatmawati82@gmail.com', '', '', 'JL. AR. HAKIM LR.SUANGGA, KOTA MAKASSAR', NULL, NULL, 'CHAERUL', 'SAUDARA', '085244440155', 'JL. AR. HAKIM LR.SUANGGA, KOTA MAKASSAR', '1', '0', '0', NULL, '2019-11-23 19:25:42', NULL);
INSERT INTO `tb_person` VALUES (137, 119, 'AGN-000027', 3, '7318271501940002', 'Wilmar Raden Batara', 'makassar', '1994-01-15', '082165442077', '081245826600', 'cheetahsesama2@gmail.com', 'wiraswasta', 'M', 'Mendetek kec. makale utara kab. tana toraja', 'foto_aUlRbFJoMk5IODdYYzdTMVpVNGVBQT09.JPG', 'ktp_aUlRbFJoMk5IODdYYzdTMVpVNGVBQT09.jpg', 'Elda Juanne', 'adik', '081356228224', 'Barana\', Tikala, Toraja Utara', '1', '1', '1', NULL, '2019-11-23 19:28:03', '2019-11-23 19:52:55');
INSERT INTO `tb_person` VALUES (138, 85, 'AGN-000028', 3, '7371100406840022', 'Eko Andriyanto', 'KLATEN', '1984-06-04', '082189060705', '', 'evandrey88@gmail.com', '', '', 'JL. CENDRAWASIH , KOTA MAKASSAR', NULL, NULL, 'EKO', 'SAUDARA', '082189060705', 'JL. CENDRAWASIH , KOTA MAKASSAR', '1', '0', '0', NULL, '2019-11-23 19:30:07', NULL);
INSERT INTO `tb_person` VALUES (139, 102, 'AGN-000029', 3, '7316040407920006', 'bambang prasetya', 'sossok', '1992-07-04', '085256799223', '', 'bambangprasetya@gmail.com', 'Pelajar', '', 'Sossok', NULL, NULL, 'Bambing', 'Saudara Kandung', '085255445123', 'Sossok', '1', '0', '0', NULL, '2019-11-23 19:34:26', NULL);
INSERT INTO `tb_person` VALUES (140, 129, 'AGN-000030', 3, '7318052611940055', 'Satriyo Pratama Putra', 'MAKALE', '1994-11-26', '082348036026', '', 'samsamlanas11@gmail.com', 'ADMIN', 'L', 'ASPOL MAKALE, TANA TORAJA', 'foto_Wk1nR0ExYTRjREhCZk1Da1ZGYktCdz09.jpeg', 'ktp_Wk1nR0ExYTRjREhCZk1Da1ZGYktCdz09.jpeg', 'Hilda Adelia', 'ISTRI', '085299667299', 'Jl Sida Kampung Baru Makale Tana Toraja', '1', '1', '1', NULL, '2019-11-23 19:34:28', '2019-11-23 20:27:54');
INSERT INTO `tb_person` VALUES (141, 92, 'AGN-000031', 3, '9102012312850003', 'ASNITA BARA', 'TAGARI', '1982-09-04', '081318272350', '', 'asnitabara2385@gmail.com', 'GURU', '', 'SINAKMA, KAB. JAYAWIJAYA', NULL, NULL, 'CIPU', 'SAUDARA', '13524536547', 'TAGARI', '1', '0', '0', NULL, '2019-11-23 19:38:25', '2019-11-23 19:43:05');
INSERT INTO `tb_person` VALUES (142, 83, 'AGN-000032', 3, '7316081305950001', 'muh firmanyah', 'kalosi', '1995-05-13', '085397887845', '', 'muhfirmansyah130595@gmail.com', 'Mahasiswa', 'M', 'dusun buntu kalosi', 'foto_eDk1U3hUZnppN0FLeUZSQ25TQnl4Zz09.jpg', 'ktp_eDk1U3hUZnppN0FLeUZSQ25TQnl4Zz09.jpg', 'suardi', 'keluarga', '085242551468', 'jl batua raya 3 lorong 2 no 14', '1', '1', '1', NULL, '2019-11-23 19:38:47', '2019-11-23 20:02:31');
INSERT INTO `tb_person` VALUES (143, 118, 'AGN-000033', 3, '7315023059000002', 'Muhammad Ikbal', 'Pinrang', '1990-05-23', '085259236595', '082344483332', 'ikbal.mipb@gmail.com', 'Wiraswasta', 'L', 'bela belawa kec. suppa kab. pinrang', 'foto_ZWhqaGtYdTNKZDN2bUE5Z1FUcUZmQT09.jpg', 'ktp_ZWhqaGtYdTNKZDN2bUE5Z1FUcUZmQT09.jpg', 'Fitri Indrajuliani', 'Istri', '+6282323333975', 'Jl. Kejayaan Raya', '1', '1', '1', NULL, '2019-11-23 19:42:44', '2019-11-23 20:28:37');
INSERT INTO `tb_person` VALUES (144, 86, 'AGN-000034', 3, '7304036504980001', 'etty permatasari', 'jeneponto', '1998-04-25', '082351321325', '', 'ettypermata25@gmail.com', 'Pelajar', '', 'btn. bumi lontara indah, jeneponto', NULL, NULL, 'Soleka', 'ibu Kandung', '081340084804', 'btn. bumi lontara indah, jeneponto', '1', '0', '0', NULL, '2019-11-23 19:45:24', NULL);
INSERT INTO `tb_person` VALUES (145, 118, 'AGN-000035', 3, '7372036903940002', 'Arini Puspita', 'pare pare', '1994-03-29', '085394342822', '', 'arinissac@gmail.com', 'Perawat', 'M', 'jl. abu bakar lambogo', 'foto_SVo4Ym9BK3lybEFuRkVBeVZJM2c4Zz09.jpg', 'ktp_SVo4Ym9BK3lybEFuRkVBeVZJM2c4Zz09.jpg', 'Abdullah Dafa', 'Kemenakan', '085214055583', 'Jl. Kejayaan Raya Parepare', '1', '1', '1', NULL, '2019-11-23 19:46:12', '2019-11-23 20:46:26');
INSERT INTO `tb_person` VALUES (146, 101, 'AGN-000036', 3, '7318321111760002', 'Nikodemus Sigala', 'TANA TORAJA', '1976-11-11', '085256044281', '', 'nikodemussigala@gmail.com', 'Karyawan Swasta', 'L', 'KAMIRI BO\'NE LEATUNG MATALLO SANGALLA UTARA TANA TORAJA', 'foto_MmVwUUtkRVlEVWhJMDM2WW9rNmdGQT09.jpg', 'ktp_MmVwUUtkRVlEVWhJMDM2WW9rNmdGQT09.jpg', 'BERYL AVASSALOM', 'ANAK', '088247466468', 'Kamiri Bo\'ne Leatung Matallo Sangalla\' Utara Tana Toraja', '1', '1', '1', NULL, '2019-11-23 19:47:29', '2019-11-27 15:34:23');
INSERT INTO `tb_person` VALUES (147, 122, 'AGN-000037', 3, '9109017005780004', 'Roswaty', 'Makassar', '1978-05-30', '0895800463796', '081354006205', 'roswaty@gmail.com', 'Marketing', 'XL', 'Jl. Pa\'bongkayya No.67 Laikang, Biringkanaya, Makassar', 'foto_dlI1MXMvamdoOTIyVlQ0YWdkbW4vQT09.jpg', 'ktp_dlI1MXMvamdoOTIyVlQ0YWdkbW4vQT09.jpg', 'Daeng Unga', 'Ibu', '085299160261', 'Jl. Pa\'bongkayya No.67 Laikang, Biringkanaya, Makassar', '1', '1', '1', NULL, '2019-11-23 19:48:48', '2019-11-23 20:26:21');
INSERT INTO `tb_person` VALUES (148, 106, 'AGN-000038', 3, '7310042012820001', 'daniel aldani umboh', 'bogor', '1989-12-20', '085342544754', '', 'danielaldani61@gmail.com', 'Wiraswasta', 'Xxl', 'jl ambarala timur no 28, pangkajene dan kepulauan', 'foto_VVNmZERFSnEwY3M3cUVpc05rY0xTUT09.jpg', 'ktp_VVNmZERFSnEwY3M3cUVpc05rY0xTUT09.jpg', 'alfil ma\'ruf', 'ayah kandung', '082195028689', 'jl ambarala timur no 28, pangkajene dan kepulauan', '1', '1', '1', NULL, '2019-11-23 19:50:05', '2019-11-24 16:05:02');
INSERT INTO `tb_person` VALUES (149, 108, 'AGN-000039', 3, '7371066404980001', 'ST. MAEMUNA R', 'MAKASSAR', '1998-04-24', '085394293200', '', 'maemunar244@gmail.com', 'AAAAAA', 'M', 'JL. TINUMBU LR.132 NO.43, KEL. BUNGA EJAYA, KEC. BONTOALA, MAKASSAR', 'foto_WHJYK3JaUUwrWXlKYmZWN296RnV5Zz09.jpg', 'ktp_WHJYK3JaUUwrWXlKYmZWN296RnV5Zz09.jpg', 'MAEMUNA', 'SAUDARA KANDUNG', '085394293200', 'JL. TINUMBU LR.132 NO.43, KEL. BUNGA EJAYA, KEC. BONTOALA, MAKASSAR', '1', '1', '1', NULL, '2019-11-23 19:50:43', '2019-11-27 20:04:19');
INSERT INTO `tb_person` VALUES (150, 95, 'AGN-000040', 3, '7371092803870009', 'muhammad thaib', 'JAKARTA', '1987-03-28', '082291609119', '', 'muh.thaib28@gmail.com', '', '', 'JL. HERTASNING VI NO.24 KOTA MAKASSAR', NULL, NULL, 'HJ. INA', 'BUNDA', '082189184059', 'KOTA MAKASSAR', '1', '0', '0', NULL, '2019-11-23 19:53:15', NULL);
INSERT INTO `tb_person` VALUES (151, 93, 'AGN-000041', 3, '7371120509010009', 'APNER KRISTIAN', 'BERAU', '2001-09-05', '085777458010', '', 'Apnerkristian12@gmail.com', 'MAHASISWA', '', 'JL. INSPEKSI PAM NO. 20', NULL, NULL, 'YUNUS', 'AYAH', '6285298747931', 'JL. INSPEKSI PAM NO. 20', '1', '0', '0', NULL, '2019-11-23 19:54:50', NULL);
INSERT INTO `tb_person` VALUES (152, 91, 'AGN-000042', 3, '7371140912840001', 'ahmad ibrahim', 'kendari', '1983-12-04', '085340860604', '08114124300', 'ahmadibrahim4158235@gmail.com', 'wiraswasta', 'L', 'btn. dwidarma blok A19/b, makassar', 'foto_Vnc0NEo3UlJ3V28wK2lnZG1HSGQ5dz09.jpeg', 'ktp_Vnc0NEo3UlJ3V28wK2lnZG1HSGQ5dz09.jpeg', 'risma', 'istri', '085298056325', 'btn. dwidarma blok A19/b, makassar', '1', '1', '1', NULL, '2019-11-23 19:56:10', '2019-11-23 21:49:35');
INSERT INTO `tb_person` VALUES (153, 110, 'AGN-000043', 3, '7371143105980001', 'MUHAMMAD RIDWAN', 'SURABAYA', '1998-05-31', '082346873772', '0895601197846', 'mhmmdrdwn31@gmail.com', 'pelajar', 'M', 'JL. PROF DR. IR SUTAMI NO.11, KEL. BIRAA, KEC. TAMALANREA, MAKASSAR', 'foto_K0I5SFUzdGpXWUZTc0s5NlZhOU4yUT09.jpg', 'ktp_K0I5SFUzdGpXWUZTc0s5NlZhOU4yUT09.jpg', 'RIDWAN', 'SAUDARA KANDUNG', '082346873772', 'JL. PROF DR. IR SUTAMI NO.11, KEL. BIRAA, KEC. TAMALANREA, MAKASSAR', '1', '1', '1', NULL, '2019-11-23 19:59:12', '2019-11-25 19:11:15');
INSERT INTO `tb_person` VALUES (154, 88, 'AGN-000044', 3, '7604101712750001', 'MUKHTAR ACO, SH', 'BARU', '1975-12-17', '085299983447', '', 'Acoymapilli@gmail.com', 'WIRASWASTA', 'L', 'JL. POROS TUTAR', 'foto_Rm9NOWMzc0d5S3lNSlBVYzRZNnJDZz09.jpg', 'ktp_Rm9NOWMzc0d5S3lNSlBVYzRZNnJDZz09.jpg', 'Nur alam mukhtar', 'Anak', '082246351001', 'JL. POROS TUTAR', '1', '1', '1', NULL, '2019-11-23 19:59:43', '2019-11-23 21:15:10');
INSERT INTO `tb_person` VALUES (155, 99, 'AGN-000045', 3, '7605086508920001', 'NURMALA HR', 'MAJENE', '1992-08-25', '082123542582', '', 'Nurmala8767@gmail.com', 'MAHASISWA', '', 'LINGK. LAYONGA MAJENE', NULL, NULL, 'PAK HAMZAH', 'AYAH', '081241511663', 'LINGK. LAYONGA MAJENE', '1', '0', '0', NULL, '2019-11-23 20:00:27', NULL);
INSERT INTO `tb_person` VALUES (156, 116, 'AGN-000046', 3, '7318051803000001', 'REPRIANUS LABA PAPIDUNAN', 'MAKALE', '2000-03-18', '081527039137', '', 'teamcheetahbersamaindonesia@gmail.com', 'PELAJAR', 'L', 'LOMBOK, KEL. ARIANG, KEC. MAKALE, KAB TANA TORAJA', 'foto_a3ROQ1V1L3FYUmxZczd2QUlFN0V2dz09.jpg', 'ktp_a3ROQ1V1L3FYUmxZczd2QUlFN0V2dz09.jpg', 'Anto', 'sepupu', '081527039137', 'LOMBOK, KEL. ARIANG, KEC. MAKALE, KAB TANA TORAJA', '1', '1', '1', NULL, '2019-11-23 20:11:54', '2019-11-24 12:59:36');
INSERT INTO `tb_person` VALUES (157, 117, 'AGN-000047', 3, '7105135808860001', 'Stela Hutri Rompas', 'Lansot', '1986-08-18', '082190858608', '', 'Stelahutri@gmail.com', 'swasta', 'm', 'Lansot', 'foto_Mng4azFEazJmYzJhOU96ejRtZWEvZz09.jpg', 'ktp_Mng4azFEazJmYzJhOU96ejRtZWEvZz09.jpg', 'henny sumampouw', 'ibu', '085298386256', 'lansot, tareran', '1', '1', '1', NULL, '2019-11-23 20:14:25', '2019-11-23 20:24:56');
INSERT INTO `tb_person` VALUES (158, 106, 'AGN-000048', 3, '7371130804760012', 'fathuddin', 'makassar', '1976-04-08', '085240960246', '', 'udienmadhaytona@gmail.com', 'wiraswasta', 'XL', 'makassar', 'foto_MkhuTXJGeVBlS1NQU21CQTI5VFpkUT09.jpg', NULL, 'sitti nurhayati', 'ibu kandung', '0895806414781', 'jl.aroepala 1 no.17', '1', '1', '0', NULL, '2019-11-23 20:46:04', '2019-11-24 20:11:54');
INSERT INTO `tb_person` VALUES (159, 127, 'MEM-000013', 4, '7318190104630001', 'ELI', 'GANDANGBATU', '1963-04-01', '08124135645', '', 'c0559447@gmail.comt', 'PNS', '', 'GANDANGBATU SILLANAN', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-23 20:47:58', NULL);
INSERT INTO `tb_person` VALUES (160, 97, 'AGN-000049', 3, '7326072503910001', 'eduarto agung patasik', 'ujung pandang', '1991-03-25', '082290475468', '', 'eduar.agung25@gmail.com', 'Karyawan swasta', '', 'desa patanggan, kel. buntu la\'bo, kec.sanggalangi, kab toraja utara', NULL, NULL, 'agung', 'saudara kandung', '082290475468', 'desa patanggan, kel. buntu la\'bo, kec.sanggalangi, kab toraja utara', '1', '0', '0', NULL, '2019-11-23 21:12:37', NULL);
INSERT INTO `tb_person` VALUES (161, 153, 'MEM-000014', 4, '0089763678987012', 'Muhammad ridwan', 'Makassar', '1998-05-31', '082346873772', '085237519308', 'Aiswa123@gmail.com', 'Irt', 'M', 'Jl.profdr ir sutami', 'foto_MjVPeTVNOW9TeWhjdnNTalcwaFNMdz09.jpg', 'ktp_MjVPeTVNOW9TeWhjdnNTalcwaFNMdz09.jpg', 'Ainun', 'Adek', '082567967334', 'Jl prof dr ir sutami', '1', '1', '1', NULL, '2019-11-25 19:19:57', '2019-11-25 19:26:41');
INSERT INTO `tb_person` VALUES (162, 80, 'COF-000051', 2, '3573022107910002', 'muhammad juryansyah', 'Malang', '2019-11-26', '081231412292', '', 'bitcoinrich78@vmail.com', 'Bisnismen', 'XXL', 'Surabaya', NULL, NULL, 'Ayna laziza makmuri', 'Istri', '+6288228400200', 'Jl wiroto 3 no 1 malang', '1', '1', '0', NULL, '2019-11-27 10:40:46', '2019-11-27 11:54:08');
INSERT INTO `tb_person` VALUES (163, 162, 'AGN-000050', 3, '3573022107910003', 'muhammad juryansyah', 'Malang', '2019-11-27', '087701031018', '', 'legendleader77@gmail.com', '', '', 'Surabaya', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-27 11:16:08', NULL);
INSERT INTO `tb_person` VALUES (164, 146, 'MEM-000015', 4, '7326115811680001', 'ESTY PODANG SAKKUNG', 'RANTEPAO', '1968-11-18', '082198867643', '081243211088', 'estypodang.ep68@gmail.com', 'Karyawan Swasta', '', 'Jl.Pemuda Tagari tallunglipu', NULL, NULL, 'Rielda Suryanti Saludung', 'Anak', '', 'Jl.Pemuda Tagari tallunglipu', '1', '0', '0', NULL, '2019-11-27 16:00:44', NULL);
INSERT INTO `tb_person` VALUES (165, 146, 'MEM-000016', 4, '7318321111400005', 'Bokko', 'Eropa', '2009-02-17', '00000000000', '00000000000', 'bokkoresu.br@gmail.com', 'sopir', '', 'puncak jaya papua', NULL, NULL, 'sampe', 'anak tiri', '0000000000', '', '1', '0', '0', NULL, '2019-11-27 17:30:20', NULL);
INSERT INTO `tb_person` VALUES (166, 149, 'MEM-000017', 4, '1234567890123456', 'ASASASAS', 'ASSDASD', '2019-11-04', '434', '', 'yurihanifdza@gmail.com', 'HFGH', 'M', 'ajhgfds', 'foto_YndEbmQ4dlRzL1ZKKzFUVlpWa0xudz09.jpg', 'ktp_YndEbmQ4dlRzL1ZKKzFUVlpWa0xudz09.jpg', 'A', 'A', '6', 'SS', '1', '1', '1', NULL, '2019-11-27 20:10:44', '2019-11-27 20:16:01');
INSERT INTO `tb_person` VALUES (167, 149, 'MEM-000018', 4, '1234567890012345', 'gui', 'ddd', '2019-11-06', '77', '', 'asdahda@gmail.com', 'fd', 'M', 'asdhada', 'foto_WEN2SGo5UUR5NWJndmhhaGpGM1ZEZz09.jpg', 'ktp_WEN2SGo5UUR5NWJndmhhaGpGM1ZEZz09.jpg', 'q', 'q', '00', 'sa', '1', '1', '1', NULL, '2019-11-27 20:52:25', '2019-11-27 20:57:26');
INSERT INTO `tb_person` VALUES (168, 149, 'MEM-000019', 4, '2222333445678901', 'lia', 'mks', '2019-11-26', '12234', '', 'lia@gmail.com', 'ibr', 'L', 'tnb', 'foto_bGp3Z21rRHYxOW1LOHdKTk5tZzhQZz09.jpg', 'ktp_bGp3Z21rRHYxOW1LOHdKTk5tZzhQZz09.jpg', 'lili', 'saud', '124', 'tnb', '1', '1', '1', NULL, '2019-11-27 21:16:01', '2019-11-27 21:17:22');
INSERT INTO `tb_person` VALUES (169, 81, 'AGN-000051', 3, '7309141806910008', 'hasbi', 'makassar', '2019-11-14', '082348577799', '', 'zhasbullah08@gmail.com', '', '', 'jljfffff', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-28 00:02:25', NULL);
INSERT INTO `tb_person` VALUES (170, 0, 'FON-000021', 1, '7309141806910009', 'Tes Founder', 'cheetah', '2019-08-28', '088888888', '', 'spcheetah011@gamil.com', '', '', 'jl abd. Razak', NULL, NULL, '', '', '', '', '1', '0', '0', NULL, '2019-11-28 00:50:43', '2019-11-28 15:38:21');
INSERT INTO `tb_person` VALUES (171, 170, 'COF-000052', 2, '1234567891234569', 'COF Cheetah Test', 'makassar', '1999-11-10', '088888888', '', 'tradingbtc01@gamil.com', 'adsasa', 'M', 'makassar', 'foto_ZGl3V0FrNUJDdTdHZUovdy9iOENDZz09.jpeg', 'ktp_ZGl3V0FrNUJDdTdHZUovdy9iOENDZz09.jpeg', 'aaaaa', 'asda', '000', 'fdgd', '1', '1', '1', NULL, '2019-11-28 00:58:06', '2019-11-29 00:10:08');
INSERT INTO `tb_person` VALUES (172, 171, 'AGN-000052', 3, '1234567891234568', 'agency cheetah test', 'test', '2019-11-12', '123456789', '', 'tradingbtc02@gmail.com', 'swasta', 'M', 'jl test', 'foto_ODBGMEkreEZ5YnpabExlSWpGYlJIUT09.jpg', 'ktp_ODBGMEkreEZ5YnpabExlSWpGYlJIUT09.jpg', 'aa', 'aaa', '1234567890', 'aa', '1', '1', '1', NULL, '2019-11-28 01:04:14', '2019-11-28 02:27:47');
INSERT INTO `tb_person` VALUES (173, 146, 'MEM-000020', 4, '7318320606180001', 'BERYL AVASSALOM SIGALA', 'TANA TORAJA', '2018-06-06', '085256044281', '', 'hermiyanitonapa@gmail.com', 'siswa', 'L', 'Kamiri Bo\'ne Leatung Matallo sangalla Utara Tana toraja', NULL, NULL, 'Nikodemus Sigala', 'Orang Tua', '085256044281', 'Kamiri Bo\'ne Leatung Matallo sangalla Utara Tana toraja', '1', '1', '0', NULL, '2019-11-28 09:23:37', '2019-11-28 15:32:41');
INSERT INTO `tb_person` VALUES (174, 171, 'AGN-000053', 3, '1234567891012345', 'Agency Cheetah', 'makassar', '2019-02-13', '0888888888', '', 'tradingbtc03@gmail.com', 'Swasta', 'M', 'jl abd razak', 'foto_Z21oR2dsUnZvMzJHUmJLY1FPcVNQQT09.jpg', 'ktp_Z21oR2dsUnZvMzJHUmJLY1FPcVNQQT09.jpg', 'Mr. Baso', 'Kakak', '08990011222', 'Jl. Tun Abd Razak', '1', '1', '1', NULL, '2019-11-28 22:40:15', '2019-11-28 23:00:48');
INSERT INTO `tb_person` VALUES (175, 171, 'AGN-000054', 3, '1234567891012346', 'cheetah test', 'makassar', '2019-11-27', '088888888', '', 'tradingbtc04@gmail.com', 'Swasta', 'XL', 'jl tun Abd Razak', 'foto_Q1J2dG9oMUp5UThCRndrRnBwbFFYdz09.jpg', 'ktp_Q1J2dG9oMUp5UThCRndrRnBwbFFYdz09.jpg', 'Mr. Baso', 'Kakak', '23456789', 'Jl. Tun Abd Razak', '1', '1', '1', NULL, '2019-11-28 23:12:24', '2019-11-28 23:15:52');
INSERT INTO `tb_person` VALUES (176, 171, 'AGN-000055', 3, '1234567891012348', 'CHEETAH TEST', 'MAKASSAR', '1987-01-05', '0888888888', '', 'tradingbtc05@gmail.com', 'Swasta', 'XL', 'jl tun abd Razak Kec, Tombolo Kel Manggala Kab Gowa Sulawesi selatan,', 'foto_VWM2dzJia1JVRGdXdzA1a1ZGQnRSUT09.jpg', 'ktp_VWM2dzJia1JVRGdXdzA1a1ZGQnRSUT09.jpg', 'Mr. Baso', 'Ayah', '0896865436677', 'Jl. Tun Abd Razak Kab. Gowa', '1', '1', '1', NULL, '2019-11-28 23:48:42', '2019-11-29 03:20:10');
INSERT INTO `tb_person` VALUES (177, 172, 'MEM-000021', 4, '1323456789412345', 'firman', 'buntu', '2019-11-28', '000', '', 'firman@gmail.com', 'sdadfa', 'M', 'barana', 'foto_b3hsazJQWG4vNXVMNjUwU01wR005QT09.jpeg', 'ktp_b3hsazJQWG4vNXVMNjUwU01wR005QT09.jpeg', 'aaa', 'qqq', '00', 'dsjhda', '1', '1', '1', NULL, '2019-11-29 00:02:50', '2019-11-29 00:05:35');
INSERT INTO `tb_person` VALUES (178, 64, 'MEM-000022', 4, '1234565434567890', 'Contoh 01', 'makassar', '2019-11-19', '087736746326432', '', 'mpampam5@gmail.com', 'PNS', 'XL', 'Jl. mannuruki Raya', 'foto_OWhubFlaWlpDSUhDRzMyR0hBQUJhZz09.PNG', 'ktp_OWhubFlaWlpDSUhDRzMyR0hBQUJhZz09.PNG', 'Muhammad Irfan Ibnu', 'Keponakan', '321321', 'jl. abdul kadir', '1', '1', '1', NULL, '2019-11-29 15:28:54', '2019-11-29 17:41:04');

SET FOREIGN_KEY_CHECKS = 1;
