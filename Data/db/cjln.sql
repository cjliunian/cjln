/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50614
Source Host           : localhost:3306
Source Database       : cjln

Target Server Type    : MYSQL
Target Server Version : 50614
File Encoding         : 65001

Date: 2014-01-10 17:49:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cj_article
-- ----------------------------
DROP TABLE IF EXISTS `cj_article`;
CREATE TABLE `cj_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chaid` int(11) DEFAULT NULL,
  `title` varchar(160) NOT NULL,
  `thumb` varchar(100) DEFAULT NULL,
  `keywords` varchar(80) DEFAULT NULL,
  `description` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `listorder` tinyint(3) DEFAULT '0',
  `inputtime` int(10) unsigned DEFAULT '0',
  `updatetime` int(10) unsigned DEFAULT '0',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `hits` int(11) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `content` mediumtext NOT NULL,
  `status` tinyint(2) DEFAULT '1',
  `posids` int(11) NOT NULL DEFAULT '0' COMMENT '推荐位ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_article
-- ----------------------------
INSERT INTO `cj_article` VALUES ('1', '4', '集团概况', null, 'abc,qwe,aa', '集团概况', '0', '0', '0', '0', null, null, '&lt;p&gt;\r\n	四川正东农牧集团有限责任公司成立于1998年。是集羊业、猪业、饲料、生物、生态、种植、食品、科研于一体的综合性农牧企业。专注于为社会提供优质种猪、种羊、生态精品猪肉、羊肉、新型无公害饲料等系列产品。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	集团公司现有员工500余人，拥有可控基地50000余亩，辐射四川、贵州两省，生产经营场地近10万平方米，公司生产经营产品100余种，获得知识产权\r\n和专利成果30余项。形成了“产业融入城乡统筹，产业融入新农村建设、产业融入乡村旅游，种养结合循环高效”为一体的现代化农牧体系。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	集团公司始终坚持安全健康和从育种到餐桌、\r\n从田间到市场的发展理念，致力于探索和实践现代农业发展的新路子，突破了产业发展中的诸多难点和瓶颈，其中《环保菌剂在山羊舍饲养殖中零排治污的关键技术\r\n与应用》、《后备母猪饲养零排放圈舍设计》、《节约化养殖用高架式垫料发酵山羊圈舍设计》、《圈养性畜微生态环保菌剂及其应用》、《生猪规模化养殖环保节\r\n能无排放关键技术与示范》等重大可研项目获得科研成果认证和国家专利，饲料产品获得中国质量中心的CQC认证，多个品种被中国绿色食品发展中心确认为“绿\r\n色食品生产资料”。通过多年的不懈努力与中外院校、专家团队紧密合作，基本实现了投资风险可控、四季温度可控、疫病防治可控、粪污治理可控、生产成本可\r\n控、生产指标可控、产品质量可控、效益保障可控的保障体系。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	集团公司历届评为“四川省农业产业化经营重\r\n点龙头企业”、“四川省建设新农村先进示范单位”、“国家公益性行业农业科技项目示范基地”；“中国科技创新型中小企业100强”；“第二届中国畜牧行业\r\n百强优秀企业”；“中国畜牧行业十大新锐企业”，山羊生产基地被国家农业部授予“肉羊标准化示范场”，“国家级山羊标准化养殖基地”；生猪生产基地被确定\r\n为“四川畜科院鑫博养殖科研实验基地”、“四川省生猪健康养殖示范基地”、“四川省精品农业示范区”、“四川农业大学科研教学基地”、“四川省防疫总站猪\r\n鸡主要疫病综合免疫技术示范实验场”、“猪链球生物灾害防控技术研究与实施试验场”。被评为“第二届中国畜牧行业百强优秀企业”；“中国畜牧行业十大新锐\r\n企业”，“2011年中国科技创新型中小企业百强优秀企业”。\r\n&lt;/p&gt;', '1', '0');
INSERT INTO `cj_article` VALUES ('2', '5', '组织架构', null, 'xyz,123', 'vvvv', '0', '0', '0', '0', null, null, '&lt;p align=\\&quot;center\\&quot;&gt;\r\n	&lt;strong&gt;&lt;img src=\\&quot;/Public/Static/kindeditor/attached/image/20140110/20140110110805_21802.jpg\\&quot; alt=\\&quot;\\&quot; /&gt;&lt;br /&gt;\r\n&lt;/strong&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	四川正东农牧集团有限责任公司成立于1998年。是集羊业、猪业、饲料、生物、生态、种植、食品、科研于一体的综合性农牧企业。专注于为社会提供优质种猪、种羊、生态精品猪肉、羊肉、新型无公害饲料等系列产品。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	集团公司现有员工500余人，拥有可控基地50000余亩，辐射四川、贵州两省，生产经营场地近10万平方米，公司生产经营产品100余种，获得知识产权\r\n和专利成果30余项。形成了“产业融入城乡统筹，产业融入新农村建设、产业融入乡村旅游，种养结合循环高效”为一体的现代化农牧体系。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	集团公司始终坚持安全健康和从育种到餐桌、\r\n从田间到市场的发展理念，致力于探索和实践现代农业发展的新路子，突破了产业发展中的诸多难点和瓶颈，其中《环保菌剂在山羊舍饲养殖中零排治污的关键技术\r\n与应用》、《后备母猪饲养零排放圈舍设计》、《节约化养殖用高架式垫料发酵山羊圈舍设计》、《圈养性畜微生态环保菌剂及其应用》、《生猪规模化养殖环保节\r\n能无排放关键技术与示范》等重大可研项目获得科研成果认证和国家专利，饲料产品获得中国质量中心的CQC认证，多个品种被中国绿色食品发展中心确认为“绿\r\n色食品生产资料”。通过多年的不懈努力与中外院校、专家团队紧密合作，基本实现了投资风险可控、四季温度可控、疫病防治可控、粪污治理可控、生产成本可\r\n控、生产指标可控、产品质量可控、效益保障可控的保障体系。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	集团公司历届评为“四川省农业产业化经营重\r\n点龙头企业”、“四川省建设新农村先进示范单位”、“国家公益性行业农业科技项目示范基地”；“中国科技创新型中小企业100强”；“第二届中国畜牧行业\r\n百强优秀企业”；“中国畜牧行业十大新锐企业”，山羊生产基地被国家农业部授予“肉羊标准化示范场”，“国家级山羊标准化养殖基地”；生猪生产基地被确定\r\n为“四川畜科院鑫博养殖科研实验基地”、“四川省生猪健康养殖示范基地”、“四川省精品农业示范区”、“四川农业大学科研教学基地”、“四川省防疫总站猪\r\n鸡主要疫病综合免疫技术示范实验场”、“猪链球生物灾害防控技术研究与实施试验场”。被评为“第二届中国畜牧行业百强优秀企业”；“中国畜牧行业十大新锐\r\n企业”，“2011年中国科技创新型中小企业百强优秀企业”。\r\n&lt;/p&gt;', '1', '0');
INSERT INTO `cj_article` VALUES ('3', '6', '资质荣誉', '', 'vsdf', '资质荣誉', '0', '0', '0', '0', null, '', 'sdfsdfsd', '1', '0');
INSERT INTO `cj_article` VALUES ('4', '2', '组织架构', '', 'xyz,123', 'vvvv', '0', '1389260846', '1389260846', '0', null, '', '&lt;p&gt;\r\n	四川正东农牧集团有限责任公司成立于1998年。是集羊业、猪业、饲料、生物、生态、种植、食品、科研于一体的综合性农牧企业。专注于为社会提供优质种猪、种羊、生态精品猪肉、羊肉、新型无公害饲料等系列产品。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	集团公司现有员工500余人，拥有可控基地50000余亩，辐射四川、贵州两省，生产经营场地近10万平方米，公司生产经营产品100余种，获得知识产权\r\n和专利成果30余项。形成了“产业融入城乡统筹，产业融入新农村建设、产业融入乡村旅游，种养结合循环高效”为一体的现代化农牧体系。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	集团公司始终坚持安全健康和从育种到餐桌、\r\n从田间到市场的发展理念，致力于探索和实践现代农业发展的新路子，突破了产业发展中的诸多难点和瓶颈，其中《环保菌剂在山羊舍饲养殖中零排治污的关键技术\r\n与应用》、《后备母猪饲养零排放圈舍设计》、《节约化养殖用高架式垫料发酵山羊圈舍设计》、《圈养性畜微生态环保菌剂及其应用》、《生猪规模化养殖环保节\r\n能无排放关键技术与示范》等重大可研项目获得科研成果认证和国家专利，饲料产品获得中国质量中心的CQC认证，多个品种被中国绿色食品发展中心确认为“绿\r\n色食品生产资料”。通过多年的不懈努力与中外院校、专家团队紧密合作，基本实现了投资风险可控、四季温度可控、疫病防治可控、粪污治理可控、生产成本可\r\n控、生产指标可控、产品质量可控、效益保障可控的保障体系。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	集团公司历届评为“四川省农业产业化经营重\r\n点龙头企业”、“四川省建设新农村先进示范单位”、“国家公益性行业农业科技项目示范基地”；“中国科技创新型中小企业100强”；“第二届中国畜牧行业\r\n百强优秀企业”；“中国畜牧行业十大新锐企业”，山羊生产基地被国家农业部授予“肉羊标准化示范场”，“国家级山羊标准化养殖基地”；生猪生产基地被确定\r\n为“四川畜科院鑫博养殖科研实验基地”、“四川省生猪健康养殖示范基地”、“四川省精品农业示范区”、“四川农业大学科研教学基地”、“四川省防疫总站猪\r\n鸡主要疫病综合免疫技术示范实验场”、“猪链球生物灾害防控技术研究与实施试验场”。被评为“第二届中国畜牧行业百强优秀企业”；“中国畜牧行业十大新锐\r\n企业”，“2011年中国科技创新型中小企业百强优秀企业”。\r\n&lt;/p&gt;', '1', '0');
INSERT INTO `cj_article` VALUES ('5', '2', '3123123', null, '13123', '123123', '0', '0', '0', '0', null, null, '1231', '1', '0');
INSERT INTO `cj_article` VALUES ('6', '2', '123123', null, '123123', '12312312', '0', '0', '0', '0', null, null, '123123123123123', '1', '0');
INSERT INTO `cj_article` VALUES ('7', '3', '11321', null, '123213', '123213', '0', '0', '0', '0', null, null, '123213', '1', '0');
INSERT INTO `cj_article` VALUES ('8', '3', '123213', null, '123213', '123213', '0', '0', '0', '0', null, null, '123213123123', '1', '0');
INSERT INTO `cj_article` VALUES ('9', '14', '123123', null, '12321', '123', '0', '0', '0', '0', null, null, '123213', '1', '0');
INSERT INTO `cj_article` VALUES ('10', '14', '12323', null, '13213', '123123', '0', '0', '0', '0', null, null, '123123123', '1', '0');
INSERT INTO `cj_article` VALUES ('11', '15', '123123', null, '123123', '312312', '0', '0', '0', '0', null, null, '12321312312', '1', '0');
INSERT INTO `cj_article` VALUES ('12', '16', '123213', null, '13123', '123123', '0', '0', '0', '0', null, null, '123123123123123123123123123', '1', '0');
INSERT INTO `cj_article` VALUES ('13', '17', '13123', null, '123', '123', '0', '0', '0', '0', null, null, '123', '1', '0');
INSERT INTO `cj_article` VALUES ('14', '18', '13123', null, '123213', '123', '0', '0', '0', '0', null, null, '123213', '1', '0');
INSERT INTO `cj_article` VALUES ('15', '17', '123123', null, '123213', '123213', '0', '0', '0', '0', null, null, '123123123', '1', '0');
INSERT INTO `cj_article` VALUES ('16', '18', '123213', null, '123213', '123213', '0', '1389328181', '1389328181', '0', null, null, '123123123123213', '1', '0');
INSERT INTO `cj_article` VALUES ('17', '14', '当前猪肉价格低迷 降低养猪成本才是出路', null, '活动1', '\r\n当前猪肉价格低迷 降低养猪成本才是出路\r\n面临当前进口猪肉冲击，国内养猪业不景气的状态，猪肉市场又处于低迷的情况，如何摆脱困境，降低养猪成本、提高养猪效益成为眼下养殖户颇为关心的问题。据了解，近一个多月以来，蓬莱市场毛猪价格一直在6.10元/斤—6.30元/斤之间徘徊', '0', '1389328181', '1389328181', '0', null, null, '活动1', '1', '0');
INSERT INTO `cj_article` VALUES ('18', '14', '当前猪肉价格低迷 降低养猪成本才是出路当前猪肉价格低迷 降低养猪成本才是出路当前猪肉价格低迷 降低养猪成本才是出路', null, 'idong1', 'idong1', '0', '1389328181', '1389328181', '0', '1234', null, 'idong1', '1', '0');
INSERT INTO `cj_article` VALUES ('19', '14', '当前猪肉价格低迷 降低养猪成本才是出路222', null, '顶替枯', '地顶替顶替顶替', '0', '1389330935', '0', '0', '123456', null, '&lt;div class=\\&quot;zhengwen\\&quot;&gt;\r\n	&lt;p&gt;\r\n		面临当前进口猪肉冲击，国内养猪业不景气\r\n的状态，猪肉市场又处于低迷的情况，如何摆脱困境，降低养猪成本、提高养猪效益成为眼下养殖户颇为关心的问题。据了解，近一个多月以来，蓬莱市场毛猪价格\r\n一直在6.10元/斤—6.30元/斤之间徘徊，猪粮比维持在5.55—5.73，跌破省定6:1盈亏平衡点，进入蓝色预警区，预示着我市养猪业已进入亏\r\n损状态。我们认为现阶段应从如下四个方面入手，才能有效降低养猪成本，减少亏损。\r\n	&lt;/p&gt;\r\n	&lt;p&gt;\r\n		1、充分利用当地资源，降低饲料成本。养\r\n猪的主要成本来自于猪饲料(占养猪总成本的65%—70%)，而购买成品饲料现阶段价格居高不下，使用饲料发酵剂利用当地盛产的玉米秸杆等废料自制的青贮\r\n饲料，与成品饲料混合使用则可大大降低饲料成本，节约饲料费用支出。\r\n	&lt;/p&gt;\r\n	&lt;p&gt;\r\n		2、根据毛猪的生长期合理调整和适度把握\r\n饲料喂养量。在育肥前期，猪生长发育较快，对饲料的营养需求量高，此阶段可以让猪自由采食、充分提高毛猪的生长速度。后期肉猪长速开始变慢，累积脂肪，不\r\n宜饲喂太久，应考虑适时出栏(一般毛猪不超过220斤左右出栏为宜)，减少饲料喂养成本支出。\r\n	&lt;/p&gt;\r\n	&lt;p&gt;\r\n		3、强化猪舍清洁卫生管理，降低隐性成本\r\n费用支出。保持猪舍的干净卫生，不但可以减少病菌及寄生虫的感染，防止各种猪病的发生，能有效控制养猪用药成本。清洁生产可通过使用干撒式发酵床来实现，\r\n可有效清洁猪粪，提升毛猪的免疫力，减少猪的发病率和死亡率。另外，发酵床在猪冬春季节的防寒保暖和夏季的防暑降温方面有奇效，可减少肉猪应激反应，提升\r\n猪肉品质，增强市场竞争力。\r\n	&lt;/p&gt;\r\n	&lt;p&gt;\r\n		4、因地制宜饲养性价比高的特色品种。目\r\n前国内主要有对饲料营养水平要求高、生长速度快但肉质较差的瘦肉良种猪和耐粗饲料、肉质鲜美但生长速度慢的土杂猪两种，一般来说土杂猪猪肉要比瘦肉型猪贵\r\n一点。因此，养殖户要根据自身条件、市场需求有选择性喂养性价比高的猪种，最大限度的增加收入。\r\n	&lt;/p&gt;\r\n	&lt;p&gt;\r\n		另外，提高饲养人员科学管理水平，减少或降低管理人员的费用支出，同时尽可能减少非生产性投入，在饲料成本无法压缩的情形下也可有效减少养猪隐性成本，在当前面临养猪的困境下，对提高养猪效益也是一种可行手段。\r\n	&lt;/p&gt;\r\n&lt;/div&gt;', '1', '0');
INSERT INTO `cj_article` VALUES ('20', '19', '123', null, '123123', '12323', '0', '1389336448', '0', '0', null, null, '&lt;div class=\\&quot;cy_zuo_w\\&quot;&gt;\r\n	&lt;img src=\\&quot;/Public/Static/kindeditor/attached/image/20140110/20140110144723_23095.jpg\\&quot; /&gt;\r\n&lt;/div&gt;\r\n&lt;div class=\\&quot;cy_you_w\\&quot;&gt;\r\n	&lt;div class=\\&quot;cy_txt\\&quot;&gt;\r\n		以简阳市施家镇“山羊节能减排循环高效示范区”为中心，以100万只规模为单位建设实践区，以加盟的模式带动周边乡镇和农户发展山羊养殖业，分别在大林村、信义村、丹景乡和贵州省务川县建成了种羊场和育肥场及配套设施，被确定为“国家级肉羊标准化示范场”、“国家级山羊标准化养殖基地”。\r\n	&lt;/div&gt;\r\n&lt;/div&gt;', '1', '0');
INSERT INTO `cj_article` VALUES ('21', '20', '13123', null, '123123', '132', '0', '1389333008', '0', '0', null, null, '123123213', '1', '0');
INSERT INTO `cj_article` VALUES ('22', '21', '123123', null, '123213', '123123', '0', '1389333015', '0', '0', null, null, '123123123', '1', '0');
INSERT INTO `cj_article` VALUES ('23', '23', '1321', null, '1231', '12321', '0', '1389333026', '0', '0', null, null, '12321', '1', '0');
INSERT INTO `cj_article` VALUES ('24', '22', '12321', null, '123', '123123', '0', '1389333032', '0', '0', null, null, '123123', '1', '0');
INSERT INTO `cj_article` VALUES ('35', '24', '23423234', null, '23432', '234234', '0', '1389337295', '0', '0', null, null, '23434', '1', '1');
INSERT INTO `cj_article` VALUES ('36', '24', '234', null, '234', '234', '0', '1389337303', '0', '0', null, null, '234', '1', '0');
INSERT INTO `cj_article` VALUES ('37', '25', '234234', null, '23432', '234234', '0', '1389337314', '0', '0', null, null, '234234234234234234234234', '1', '0');
INSERT INTO `cj_article` VALUES ('25', '26', '234', null, '234', '234', '0', '1389336279', '0', '0', null, null, '&lt;div class=\\&quot;zj_tt\\&quot;&gt;\r\n	&lt;div class=\\&quot;zj_tt_pic\\&quot;&gt;\r\n		&lt;a target=\\&quot;_blank\\&quot;&gt;&lt;img src=\\&quot;/Public/Static/kindeditor/attached/image/20140110/20140110144438_52528.jpg\\&quot; height=\\&quot;148\\&quot; border=\\&quot;0\\&quot; width=\\&quot;126\\&quot; /&gt;&lt;/a&gt;\r\n	&lt;/div&gt;\r\n	&lt;div class=\\&quot;zj_tt_txt_w\\&quot;&gt;\r\n		&lt;div class=\\&quot;zj_tt_txt\\&quot;&gt;\r\n			段诚中\r\n		&lt;/div&gt;\r\n		&lt;div class=\\&quot;zj_tt_yz\\&quot;&gt;\r\n			四川省畜牧科学研究院教授、名誉院长、研究员、国家级有突出贡献的专家，中国畜牧兽医学会养猪分会副理事长。四川正东农牧集团猪业特聘首席专家。\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;div class=\\&quot;zj_tt\\&quot;&gt;\r\n	&lt;div class=\\&quot;zj_tt_pic\\&quot;&gt;\r\n		&lt;a target=\\&quot;_blank\\&quot;&gt;&lt;img src=\\&quot;/Public/Static/kindeditor/attached/image/20140110/20140110144423_74324.jpg\\&quot; height=\\&quot;148\\&quot; border=\\&quot;0\\&quot; width=\\&quot;126\\&quot; /&gt;&lt;/a&gt;\r\n	&lt;/div&gt;\r\n	&lt;div class=\\&quot;zj_tt_txt_w\\&quot;&gt;\r\n		&lt;div class=\\&quot;zj_tt_txt\\&quot;&gt;\r\n			徐刚毅\r\n		&lt;/div&gt;\r\n		&lt;div class=\\&quot;zj_tt_yz\\&quot;&gt;\r\n			四川农业大学教授、研究员、博导、国家级有突出贡献的专家。四川正东农牧集团特聘羊业首席专家。\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;div class=\\&quot;zj_tt_pic\\&quot;&gt;\r\n	&lt;a target=\\&quot;_blank\\&quot;&gt;&lt;img src=\\&quot;/Public/Static/kindeditor/attached/image/20140110/20140110144410_18676.jpg\\&quot; height=\\&quot;148\\&quot; border=\\&quot;0\\&quot; width=\\&quot;126\\&quot; /&gt;&lt;/a&gt;\r\n&lt;/div&gt;\r\n&lt;div class=\\&quot;zj_tt_txt_w\\&quot;&gt;\r\n	&lt;div class=\\&quot;zj_tt_txt\\&quot;&gt;\r\n		颜其贵\r\n	&lt;/div&gt;\r\n	&lt;div class=\\&quot;zj_tt_yz\\&quot;&gt;\r\n		四川农业大学教授。四川正东农牧集团养殖业疫病防控首席专家。\r\n	&lt;/div&gt;\r\n&lt;/div&gt;', '1', '0');
INSERT INTO `cj_article` VALUES ('26', '27', '24', null, '234', '234', '0', '1389334697', '0', '0', null, null, '234234', '1', '0');
INSERT INTO `cj_article` VALUES ('27', '28', '234234', null, '234234', '234234', '0', '1389334704', '0', '0', null, null, '234234234', '1', '0');
INSERT INTO `cj_article` VALUES ('28', '29', '123', null, '1321', '123', '0', '1389335140', '0', '0', null, null, '123123', '1', '1');
INSERT INTO `cj_article` VALUES ('29', '30', '123123', null, '123213', '13123', '0', '1389335149', '0', '0', null, null, '12312321', '1', '0');
INSERT INTO `cj_article` VALUES ('30', '31', '战略联盟', null, '123123', '战略联盟', '0', '1389335213', '0', '0', null, null, '&lt;div class=\\&quot;neirong_w\\&quot;&gt;\r\n	&lt;p&gt;\r\n		通过多年努力与中外院校、专家团队紧密合作，获得知识产权和科研成果30余项，以节能减排循环高效产业为主体的清洁养殖技术成果得到了国家发改委的认可推广和农业部规划设计院的认同复制，并吸引了国内外众多的战略合作项目，&lt;strong&gt;包括：&lt;/strong&gt;\r\n	&lt;/p&gt;\r\n	&lt;p&gt;\r\n		&lt;img src=\\&quot;file://C:/Users/%E6%B5%81%E5%B9%B4/Desktop/%E6%AD%A3%E4%B8%9C%E5%AE%98%E7%BD%91html%E5%AE%8C%E6%95%B4/%E7%BD%91%E7%AB%99html/images/jt_32.gif\\&quot; /&gt; 法国生猪研究院的技术合作\r\n	&lt;/p&gt;\r\n	&lt;p&gt;\r\n		&lt;img src=\\&quot;file://C:/Users/%E6%B5%81%E5%B9%B4/Desktop/%E6%AD%A3%E4%B8%9C%E5%AE%98%E7%BD%91html%E5%AE%8C%E6%95%B4/%E7%BD%91%E7%AB%99html/images/jt_32.gif\\&quot; /&gt; 中国农科院的食品开发合作\r\n	&lt;/p&gt;\r\n	&lt;p&gt;\r\n		&lt;img src=\\&quot;file://C:/Users/%E6%B5%81%E5%B9%B4/Desktop/%E6%AD%A3%E4%B8%9C%E5%AE%98%E7%BD%91html%E5%AE%8C%E6%95%B4/%E7%BD%91%E7%AB%99html/images/jt_32.gif\\&quot; /&gt; 四川农业大学环保菌剂治污材料的研发应用合作\r\n	&lt;/p&gt;\r\n	&lt;p&gt;\r\n		&lt;img src=\\&quot;file://C:/Users/%E6%B5%81%E5%B9%B4/Desktop/%E6%AD%A3%E4%B8%9C%E5%AE%98%E7%BD%91html%E5%AE%8C%E6%95%B4/%E7%BD%91%E7%AB%99html/images/jt_32.gif\\&quot; /&gt; 中财国发平台战略规划合作\r\n	&lt;/p&gt;\r\n	&lt;p&gt;\r\n		&lt;img src=\\&quot;file://C:/Users/%E6%B5%81%E5%B9%B4/Desktop/%E6%AD%A3%E4%B8%9C%E5%AE%98%E7%BD%91html%E5%AE%8C%E6%95%B4/%E7%BD%91%E7%AB%99html/images/jt_32.gif\\&quot; /&gt; 全国新农村建设专业委员会的项目合作\r\n	&lt;/p&gt;\r\n	&lt;p&gt;\r\n		&lt;img src=\\&quot;file://C:/Users/%E6%B5%81%E5%B9%B4/Desktop/%E6%AD%A3%E4%B8%9C%E5%AE%98%E7%BD%91html%E5%AE%8C%E6%95%B4/%E7%BD%91%E7%AB%99html/images/jt_32.gif\\&quot; /&gt; 正华项目投资合作\r\n	&lt;/p&gt;\r\n	&lt;p&gt;\r\n		&lt;img src=\\&quot;file://C:/Users/%E6%B5%81%E5%B9%B4/Desktop/%E6%AD%A3%E4%B8%9C%E5%AE%98%E7%BD%91html%E5%AE%8C%E6%95%B4/%E7%BD%91%E7%AB%99html/images/jt_32.gif\\&quot; /&gt; 北京大学中国低碳发展和研究中心的技术合作\r\n	&lt;/p&gt;\r\n	&lt;p&gt;\r\n		&lt;img src=\\&quot;file://C:/Users/%E6%B5%81%E5%B9%B4/Desktop/%E6%AD%A3%E4%B8%9C%E5%AE%98%E7%BD%91html%E5%AE%8C%E6%95%B4/%E7%BD%91%E7%AB%99html/images/jt_32.gif\\&quot; /&gt; 成都佳荣集团的合作\r\n	&lt;/p&gt;\r\n&lt;/div&gt;', '1', '0');
INSERT INTO `cj_article` VALUES ('31', '31', '13123', null, '123123', '13123', '0', '1389335164', '0', '0', null, null, '123213123', '1', '0');
INSERT INTO `cj_article` VALUES ('32', '32', '123', null, '123', '123', '0', '1389335710', '0', '0', null, null, '&lt;div class=\\&quot;sg_mzdz\\&quot;&gt;\r\n	&lt;span class=\\&quot;fontwb14\\&quot;&gt;四川正东农牧集团有限责任公司&lt;/span&gt;&lt;br /&gt;\r\n&lt;strong&gt;地址：&lt;/strong&gt;四川省简阳市简城镇中心村二社\r\n&lt;/div&gt;\r\n&lt;table class=\\&quot;ke-zeroborder\\&quot; border=\\&quot;0\\&quot; cellpadding=\\&quot;0\\&quot; cellspacing=\\&quot;0\\&quot; width=\\&quot;690\\&quot;&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td width=\\&quot;237\\&quot;&gt;\r\n				&lt;strong&gt;邮编：&lt;/strong&gt;641400\r\n			&lt;/td&gt;\r\n			&lt;td width=\\&quot;453\\&quot;&gt;\r\n				&lt;strong&gt;网址：&lt;/strong&gt;www.sczdnm.com\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td width=\\&quot;237\\&quot;&gt;\r\n				&lt;strong&gt;邮箱：&lt;/strong&gt;sczd1998@163.com\r\n			&lt;/td&gt;\r\n			&lt;td width=\\&quot;453\\&quot;&gt;\r\n				&lt;strong&gt;电话：&lt;/strong&gt;400-688-0111\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td width=\\&quot;237\\&quot;&gt;\r\n				&lt;strong&gt;传真：&lt;/strong&gt;028-27010911\r\n			&lt;/td&gt;\r\n			&lt;td width=\\&quot;453\\&quot;&gt;\r\n				&lt;strong&gt;网站联系人：&lt;/strong&gt;张先生\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;', '1', '0');
INSERT INTO `cj_article` VALUES ('33', '32', '123', null, '123', '123', '0', '1389335686', '0', '0', null, null, '&lt;div class=\\&quot;sg_mzdz\\&quot;&gt;\r\n	&lt;span class=\\&quot;fontwb14\\&quot;&gt;四川正东农牧集团有限责任公司&lt;/span&gt;&lt;br /&gt;\r\n&lt;strong&gt;地址：&lt;/strong&gt;四川省简阳市简城镇中心村二社\r\n&lt;/div&gt;\r\n&lt;table class=\\&quot;ke-zeroborder\\&quot; border=\\&quot;0\\&quot; cellpadding=\\&quot;0\\&quot; cellspacing=\\&quot;0\\&quot; width=\\&quot;690\\&quot;&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td width=\\&quot;237\\&quot;&gt;\r\n				&lt;strong&gt;邮编：&lt;/strong&gt;641400\r\n			&lt;/td&gt;\r\n			&lt;td width=\\&quot;453\\&quot;&gt;\r\n				&lt;strong&gt;网址：&lt;/strong&gt;www.sczdnm.com\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td width=\\&quot;237\\&quot;&gt;\r\n				&lt;strong&gt;邮箱：&lt;/strong&gt;sczd1998@163.com\r\n			&lt;/td&gt;\r\n			&lt;td width=\\&quot;453\\&quot;&gt;\r\n				&lt;strong&gt;电话：&lt;/strong&gt;400-688-0111\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td width=\\&quot;237\\&quot;&gt;\r\n				&lt;strong&gt;传真：&lt;/strong&gt;028-27010911\r\n			&lt;/td&gt;\r\n			&lt;td width=\\&quot;453\\&quot;&gt;\r\n				&lt;strong&gt;网站联系人：&lt;/strong&gt;张先生\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;', '1', '0');
INSERT INTO `cj_article` VALUES ('34', '32', '123', null, '123', '123', '0', '1389335702', '0', '0', null, null, '&lt;div class=\\&quot;sg_mzdz\\&quot;&gt;\r\n	&lt;span class=\\&quot;fontwb14\\&quot;&gt;四川正东农牧集团有限责任公司&lt;/span&gt;&lt;br /&gt;\r\n&lt;strong&gt;地址：&lt;/strong&gt;四川省简阳市简城镇中心村二社\r\n&lt;/div&gt;\r\n&lt;table class=\\&quot;ke-zeroborder\\&quot; border=\\&quot;0\\&quot; cellpadding=\\&quot;0\\&quot; cellspacing=\\&quot;0\\&quot; width=\\&quot;690\\&quot;&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td width=\\&quot;237\\&quot;&gt;\r\n				&lt;strong&gt;邮编：&lt;/strong&gt;641400\r\n			&lt;/td&gt;\r\n			&lt;td width=\\&quot;453\\&quot;&gt;\r\n				&lt;strong&gt;网址：&lt;/strong&gt;www.sczdnm.com\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td width=\\&quot;237\\&quot;&gt;\r\n				&lt;strong&gt;邮箱：&lt;/strong&gt;sczd1998@163.com\r\n			&lt;/td&gt;\r\n			&lt;td width=\\&quot;453\\&quot;&gt;\r\n				&lt;strong&gt;电话：&lt;/strong&gt;400-688-0111\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td width=\\&quot;237\\&quot;&gt;\r\n				&lt;strong&gt;传真：&lt;/strong&gt;028-27010911\r\n			&lt;/td&gt;\r\n			&lt;td width=\\&quot;453\\&quot;&gt;\r\n				&lt;strong&gt;网站联系人：&lt;/strong&gt;张先生\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;', '1', '0');
INSERT INTO `cj_article` VALUES ('38', '25', '234324', null, '234324', '234324', '0', '1389337331', '0', '0', null, null, '234234234234234', '1', '0');
INSERT INTO `cj_article` VALUES ('39', '33', '123', null, '123', '12312', '0', '1389337506', '0', '0', null, null, '123123123', '1', '0');
INSERT INTO `cj_article` VALUES ('40', '33', '123123', null, '123213', '123123', '0', '1389337524', '0', '0', null, null, '123123123213', '1', '0');
INSERT INTO `cj_article` VALUES ('41', '33', '123123', null, '123123', '13123', '0', '1389337537', '0', '0', null, null, '13123123123213123123213123', '1', '0');
INSERT INTO `cj_article` VALUES ('42', '33', '12312312', null, '123123213', '123123213', '0', '1389337550', '0', '0', null, null, '12312312312333333333333333123123123123123', '1', '0');
INSERT INTO `cj_article` VALUES ('43', '33', '123213', null, '123', '12321', '0', '1389337559', '0', '0', null, null, '123123', '1', '0');
INSERT INTO `cj_article` VALUES ('44', '33', '11123', null, '', '', '0', '0', '0', '0', null, null, '222123213213213123', '1', '0');
INSERT INTO `cj_article` VALUES ('45', '33', '陈稀', null, '', '', '0', '0', '0', '0', null, null, '222123213213213123', '1', '0');
INSERT INTO `cj_article` VALUES ('46', '33', '', null, '', '', '0', '1389341171', '0', '0', null, '12323', '桂林夺', '1', '0');
INSERT INTO `cj_article` VALUES ('47', '33', '1111xxx', null, '', '', '0', '1389341281', '0', '0', null, null, 'sdf sdf ', '1', '0');
INSERT INTO `cj_article` VALUES ('48', '33', '1111xxx', null, '', '', '0', '1389341405', '0', '0', null, null, '真的不错', '1', '0');
INSERT INTO `cj_article` VALUES ('49', '33', '1111xxx', null, '', '', '0', '1389341438', '0', '0', null, null, '真的不错', '1', '0');
INSERT INTO `cj_article` VALUES ('50', '33', '1111xxx', null, '', '', '0', '1389341441', '0', '0', null, null, '真的不错', '1', '0');
INSERT INTO `cj_article` VALUES ('51', '33', '顶替顶替', null, '', '', '0', '1389341452', '0', '0', null, null, '夺顶替顶替枯', '1', '0');
INSERT INTO `cj_article` VALUES ('52', '33', '123', null, '', '夺', '0', '1389341476', '0', '0', null, null, '厅枯', '1', '0');

-- ----------------------------
-- Table structure for cj_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `cj_auth_group`;
CREATE TABLE `cj_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户组id,自增主键',
  `module` varchar(20) NOT NULL COMMENT '用户组所属模块',
  `type` tinyint(4) NOT NULL COMMENT '组类型',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '用户组中文名称',
  `description` varchar(80) NOT NULL DEFAULT '' COMMENT '描述信息',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '用户组状态：为1正常，为0禁用,-1为删除',
  `rules` varchar(500) NOT NULL DEFAULT '' COMMENT '用户组拥有的规则id，多个规则 , 隔开',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_auth_group
-- ----------------------------
INSERT INTO `cj_auth_group` VALUES ('6', 'admin', '1', '管理组', '系统管理组拥有一定的权限', '1', '1,8,10,11,12,9,14,35,32,33,36,38,37,2,5,3,22,39');
INSERT INTO `cj_auth_group` VALUES ('7', 'admin', '1', '默认组', '默认组', '1', '1,8,10,11,12,9,43,14,35,32,33,36,38,37,3,22,39,44,45');
INSERT INTO `cj_auth_group` VALUES ('15', 'module', '1', '测试用户组一', '测试用户组一', '1', '2,4,3,22,39');
INSERT INTO `cj_auth_group` VALUES ('16', 'module', '1', '测试用户组二', '测试用户组二', '1', '');

-- ----------------------------
-- Table structure for cj_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `cj_auth_group_access`;
CREATE TABLE `cj_auth_group_access` (
  `uid` int(10) unsigned NOT NULL COMMENT '用户id',
  `group_id` mediumint(8) unsigned NOT NULL COMMENT '用户组id',
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_auth_group_access
-- ----------------------------
INSERT INTO `cj_auth_group_access` VALUES ('16', '7');
INSERT INTO `cj_auth_group_access` VALUES ('26', '7');

-- ----------------------------
-- Table structure for cj_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `cj_auth_rule`;
CREATE TABLE `cj_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '规则id,自增主键',
  `pid` mediumint(8) NOT NULL,
  `module` varchar(20) NOT NULL COMMENT '规则所属module',
  `type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1-url;2-主菜单',
  `name` char(80) NOT NULL DEFAULT '' COMMENT '规则唯一英文标识',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '规则中文描述',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否有效(0:无效,1:有效)',
  `condition` varchar(300) NOT NULL DEFAULT '' COMMENT '规则附加条件',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`module`,`name`,`type`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_auth_rule
-- ----------------------------
INSERT INTO `cj_auth_rule` VALUES ('1', '0', 'admin', '1', '0aa', '全局', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('2', '0', 'admin', '1', '1aa', '设置', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('3', '0', 'admin', '1', '2aa', '扩展', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('4', '2', 'admin', '1', '3aa', '站点设置', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('5', '2', 'admin', '1', '4aa', '水印设置', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('6', '5', 'admin', '1', '5aa', '小调设置', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('7', '5', 'admin', '1', '6aa', '大小设置', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('8', '1', 'admin', '1', '7aa', '菜单项1', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('9', '1', 'admin', '1', 'Menu/index', '菜单管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('10', '8', 'admin', '1', '9aa', '菜单项1.1', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('11', '10', 'admin', '1', '10aa', '菜单项1.1.惺惺惜惺惺', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('12', '11', 'admin', '1', 'Menu/mlist', '菜单项', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('14', '1', 'admin', '1', 'User/index', '用户管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('22', '3', 'admin', '1', '12312', '123123', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('33', '32', 'admin', '1', 'AuthManager/userGroup', '用户组管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('35', '1', 'admin', '1', 'Node/index', '节点管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('32', '1', 'admin', '1', 'AuthManager/index', '权限管理', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('36', '33', 'admin', '1', 'user-group-add', '增加', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('37', '33', 'admin', '1', 'user-group-edit', '修改', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('38', '36', 'admin', '1', 'test-1', '测试1', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('39', '3', 'admin', '1', '123', '123123', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('43', '9', 'Admin', '1', 'menu-add', '增加', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('41', '0', 'admin', '1', '654321', '963369', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('42', '41', 'admin', '1', '654321444', '78kjkjkjk', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('44', '0', 'admin', '1', 'Admin/Index/index', '后台首页', '1', '');
INSERT INTO `cj_auth_rule` VALUES ('45', '44', 'admin', '1', 'Admin/Index/dashboard', '后台仪表盘', '1', '');

-- ----------------------------
-- Table structure for cj_channel
-- ----------------------------
DROP TABLE IF EXISTS `cj_channel`;
CREATE TABLE `cj_channel` (
  `chanid` int(11) NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `pid` int(11) DEFAULT NULL COMMENT '栏目上级ID',
  `name` varchar(100) DEFAULT NULL COMMENT '栏目名称',
  `url` varchar(255) DEFAULT NULL COMMENT '栏目地址URL',
  `status` tinyint(5) DEFAULT NULL COMMENT '栏目状态0禁用1正常',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  `type` tinyint(5) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`chanid`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_channel
-- ----------------------------
INSERT INTO `cj_channel` VALUES ('1', '0', '关于我们', 'index.php?m=Home&c=Index&a=aboutUs&chanid=4', '1', '0', '0', null);
INSERT INTO `cj_channel` VALUES ('2', '0', '资讯中心', 'index.php?m=Home&c=Index&a=newsCenter&chanid=17', '1', '0', '0', null);
INSERT INTO `cj_channel` VALUES ('3', '0', '集团产业', 'index.php?m=Home&c=Index&a=groupCy&chanid=19', '1', '0', '0', null);
INSERT INTO `cj_channel` VALUES ('4', '1', '集团概况', 'index.php?m=Home&c=Index&a=aboutUs&chanid=4', '1', '0', '1', null);
INSERT INTO `cj_channel` VALUES ('5', '1', '组织架构', 'index.php?m=Home&c=Index&a=aboutUs&chanid=5', '1', '0', '1', null);
INSERT INTO `cj_channel` VALUES ('6', '1', '资质荣誉', 'index.php?m=Home&c=Index&a=aboutUs&chanid=6', '1', '0', '1', null);
INSERT INTO `cj_channel` VALUES ('11', '0', '正东产品', 'index.php?m=Home&c=Index&a=products&chanid=24', '1', '0', '0', null);
INSERT INTO `cj_channel` VALUES ('10', '0', '联系我们', 'index.php?m=Home&c=Index&a=contusUs&chanid=32', '1', '0', '0', null);
INSERT INTO `cj_channel` VALUES ('12', '0', '技术支持', 'index.php?m=Home&c=Index&a=techSup&chanid=26', '1', '0', '0', null);
INSERT INTO `cj_channel` VALUES ('13', '0', '发展战略', 'index.php?m=Home&c=Index&a=devStr&chanid=29', '1', '0', '0', null);
INSERT INTO `cj_channel` VALUES ('14', '2', '董事长活动', 'index.php?m=Home&c=Index&a=newsCenter&chanid=14', '1', '0', '0', null);
INSERT INTO `cj_channel` VALUES ('15', '2', '通知公告', 'index.php?m=Home&c=Index&a=newsCenter&chanid=15', '1', '0', '0', null);
INSERT INTO `cj_channel` VALUES ('16', '2', '集团动态', 'index.php?m=Home&c=Index&a=newsCenter&chanid=16', '1', '0', '0', null);
INSERT INTO `cj_channel` VALUES ('17', '2', '行业资讯', 'index.php?m=Home&c=Index&a=newsCenter&chanid=17', '1', '0', '0', null);
INSERT INTO `cj_channel` VALUES ('18', '2', '畜牧知识', 'index.php?m=Home&c=Index&a=newsCenter&chanid=18', '1', '0', '0', null);
INSERT INTO `cj_channel` VALUES ('19', '3', '山羊基地', 'index.php?m=Home&c=Index&a=groupCy&chanid=19', '1', '0', '1', null);
INSERT INTO `cj_channel` VALUES ('20', '3', '生猪基地', 'index.php?m=Home&c=Index&a=groupCy&chanid=20', '1', '0', '1', null);
INSERT INTO `cj_channel` VALUES ('21', '3', '生态基地', 'index.php?m=Home&c=Index&a=groupCy&chanid=21', '1', '0', '1', null);
INSERT INTO `cj_channel` VALUES ('22', '3', '饲料基地', 'index.php?m=Home&c=Index&a=groupCy&chanid=22', '1', '0', '1', null);
INSERT INTO `cj_channel` VALUES ('23', '3', '生物基地', 'index.php?m=Home&c=Index&a=groupCy&chanid=23', '1', '0', '1', null);
INSERT INTO `cj_channel` VALUES ('24', '11', '生态苗木', 'index.php?m=Home&c=Index&a=products&chanid=24', '1', '0', '0', '以简阳市“丹景正东国际生态产业园”和雅安市“宝兴正康林牧产业园”为基地，发展生态养殖业，开发乡村旅游，弘扬民俗文化。开发特色产品，是集团公司产业战略开发的重点项目之一。 基本育有玉兰、银杏、雪松、香樟树、塔柏、女贞、黄桷树、广玉兰、杜仲林、小叶榕、香樟、大叶榕、苗圃等生态苗木。');
INSERT INTO `cj_channel` VALUES ('25', '11', '生物菌肥', 'index.php?m=Home&c=Index&a=products&chanid=25', '1', '0', '0', '以简阳市“丹景正东国际生态产业园”和雅安市“宝兴正康林牧产业园”为基地，发展生态养殖业，开发乡村旅游，弘扬民俗文化。开发特色产品，是集团公司产业战略开发的重点项目之一。 基本育有玉兰、银杏、雪松、香樟树、塔柏、女贞、黄桷树、广玉兰、杜仲林、小叶榕、香樟、大叶榕、苗圃等生态苗木。');
INSERT INTO `cj_channel` VALUES ('26', '12', '核心专家', 'index.php?m=Home&c=Index&a=techSup&chanid=26', '1', '0', '1', null);
INSERT INTO `cj_channel` VALUES ('27', '12', '科研项目', 'index.php?m=Home&c=Index&a=techSup&chanid=27', '1', '0', '1', null);
INSERT INTO `cj_channel` VALUES ('28', '12', '养殖技术', 'index.php?m=Home&c=Index&a=techSup&chanid=28', '1', '0', '1', null);
INSERT INTO `cj_channel` VALUES ('29', '13', '营销网络', 'index.php?m=Home&c=Index&a=devStr&chanid=29', '1', '0', '1', null);
INSERT INTO `cj_channel` VALUES ('30', '13', '发展战略', 'index.php?m=Home&c=Index&a=devStr&chanid=30', '1', '0', '1', null);
INSERT INTO `cj_channel` VALUES ('31', '13', '战略联盟', 'index.php?m=Home&c=Index&a=devStr&chanid=31', '1', '0', '1', null);
INSERT INTO `cj_channel` VALUES ('32', '10', '联系方式', 'index.php?m=Home&c=Index&a=contusUs&chanid=32', '1', '0', '1', null);
INSERT INTO `cj_channel` VALUES ('33', '10', '在线留言', 'index.php?m=Home&c=Index&a=gestBook&chanid=33', '1', '0', '0', null);

-- ----------------------------
-- Table structure for cj_config
-- ----------------------------
DROP TABLE IF EXISTS `cj_config`;
CREATE TABLE `cj_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '配置ID',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '配置名称',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配置类型',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '配置说明',
  `group` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配置分组',
  `extra` varchar(255) NOT NULL DEFAULT '' COMMENT '配置值',
  `remark` varchar(100) NOT NULL COMMENT '配置说明',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `value` text NOT NULL COMMENT '配置值',
  `sort` smallint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_config
-- ----------------------------

-- ----------------------------
-- Table structure for cj_member
-- ----------------------------
DROP TABLE IF EXISTS `cj_member`;
CREATE TABLE `cj_member` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `nickname` char(16) NOT NULL DEFAULT '' COMMENT '昵称',
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '性别',
  `birthday` date NOT NULL DEFAULT '0000-00-00' COMMENT '生日',
  `qq` char(10) NOT NULL DEFAULT '' COMMENT 'qq号',
  `score` mediumint(8) NOT NULL DEFAULT '0' COMMENT '用户积分',
  `login_num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '登录次数',
  `reg_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '注册IP',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `last_login_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '最后登录IP',
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '会员状态',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `ix_uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='会员表\r\n@author   麦当苗儿\r\n@version  2013-05-27';

-- ----------------------------
-- Records of cj_member
-- ----------------------------
INSERT INTO `cj_member` VALUES ('15', '那一年', '0', '0000-00-00', '', '0', '0', '0', '0', '2130706433', '1387791641', '1');
INSERT INTO `cj_member` VALUES ('1', 'admin', '0', '0000-00-00', '', '0', '0', '0', '0', '2130706433', '1388657010', '1');
INSERT INTO `cj_member` VALUES ('16', 'imya', '0', '0000-00-00', '', '0', '0', '0', '0', '2130706433', '1389343684', '1');
INSERT INTO `cj_member` VALUES ('26', '12323', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('24', '12312312', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('17', '1111', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('25', '12323', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('21', 'ASDFDFDFDF', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('18', '12424', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('27', '123123zzzzzzzzzz', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('28', 'liunian', '0', '0000-00-00', '', '0', '0', '0', '0', '2130706433', '1387776203', '1');
INSERT INTO `cj_member` VALUES ('29', '这一城', '0', '0000-00-00', '', '0', '0', '0', '0', '2130706433', '1387779301', '1');
INSERT INTO `cj_member` VALUES ('30', 'cy2014', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('31', '2014', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('32', '123123213', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('33', '123213', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('34', '1233aaaaa', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('35', '123123', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('36', '123123213123aaaa', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('37', '123123333', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('38', '01233', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('39', '这是一个测试用户', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('40', '0122211', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('41', 'bbcbcvb', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('42', 'zxc131323', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('43', '1232130234', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('44', 'imya11', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO `cj_member` VALUES ('45', '963123', '0', '0000-00-00', '', '0', '0', '0', '0', '0', '0', '1');

-- ----------------------------
-- Table structure for cj_menu
-- ----------------------------
DROP TABLE IF EXISTS `cj_menu`;
CREATE TABLE `cj_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '菜单所属父级,默认为0表示顶级',
  `name` varchar(50) NOT NULL COMMENT '菜单名称',
  `url` varchar(100) DEFAULT NULL COMMENT 'url地址',
  `iconCls` varchar(100) DEFAULT NULL COMMENT '图标',
  `status` tinyint(4) DEFAULT '1' COMMENT '状态默认0使用，1禁止',
  `remark` varchar(200) DEFAULT NULL COMMENT '菜单描述',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cj_menu
-- ----------------------------
INSERT INTO `cj_menu` VALUES ('1', '0', '全局', '123', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('2', '0', '设置', '123', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('3', '0', '扩展', '123', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('67', '2', '站点设置', 'Config/index', 'icon-cologne-settings', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('68', '65', '内容管理', 'ContentsManage/index', 'icon-standard-text-list-bullets', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('8', '1', '菜单项1', '123', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('9', '1', '菜单管理', 'Menu/index', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('10', '8', '菜单项1.1', '13', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('45', '3', '11111', '123', '123213', '1', null, null);
INSERT INTO `cj_menu` VALUES ('14', '32', '用户管理', 'User/index', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('33', '32', '用户组管理', 'AuthManager/userGroup', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('35', '32', '节点管理', 'Node/index', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('32', '1', '权限管理', 'AuthManager/index', 'icon-standard-text-list-bullets', '1', null, null);
INSERT INTO `cj_menu` VALUES ('47', '8', '11111', '23232', '1111', '1', null, null);
INSERT INTO `cj_menu` VALUES ('50', '3', '123123', '123123', 'icon-standard-award-star-gold-1', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('51', '3', '123', '12312', 'icon-hamburg-bug', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('53', '3', '测试菜单', '12323', 'icon-standard-application-view-columns', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('54', '3', '测试菜单二', '12323', 'icon-munich-product-1', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('55', '45', '12123', '1231221', 'icon-standard-application-side-list', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('57', '58', '123123', '1232', 'icon-standard-application-split', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('58', '55', '111111', '123213', 'icon-standard-arrow-refresh-small', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('59', '58', '123213', '123', '', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('60', '53', '1232', '13213', '', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('61', '10', '1232', '12321', '', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('62', '58', '123', '1111', 'icon-standard-application-side-tree', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('63', '61', '123', '123213', 'icon-standard-book-addresses', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('64', '63', '123213', '1321vv', 'icon-standard-application-split', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('65', '0', '内容', 'top-menu', 'icon-standard-text-list-bullets', '1', null, '0');
INSERT INTO `cj_menu` VALUES ('66', '65', '栏目管理', 'Channel/index', 'icon-standard-text-list-bullets', '1', null, '0');

-- ----------------------------
-- Table structure for cj_ucenter_admin
-- ----------------------------
DROP TABLE IF EXISTS `cj_ucenter_admin`;
CREATE TABLE `cj_ucenter_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `member_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员用户ID',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '管理员状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of cj_ucenter_admin
-- ----------------------------

-- ----------------------------
-- Table structure for cj_ucenter_app
-- ----------------------------
DROP TABLE IF EXISTS `cj_ucenter_app`;
CREATE TABLE `cj_ucenter_app` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '应用ID',
  `title` varchar(30) NOT NULL COMMENT '应用名称',
  `url` varchar(100) NOT NULL COMMENT '应用URL',
  `ip` char(15) NOT NULL COMMENT '应用IP',
  `auth_key` varchar(100) NOT NULL COMMENT '加密KEY',
  `sys_login` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '同步登陆',
  `allow_ip` varchar(255) NOT NULL COMMENT '允许访问的IP',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '应用状态',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='应用表';

-- ----------------------------
-- Records of cj_ucenter_app
-- ----------------------------

-- ----------------------------
-- Table structure for cj_ucenter_member
-- ----------------------------
DROP TABLE IF EXISTS `cj_ucenter_member`;
CREATE TABLE `cj_ucenter_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` char(16) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `email` char(32) NOT NULL COMMENT '用户邮箱',
  `mobile` char(15) NOT NULL COMMENT '用户手机',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `reg_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '注册IP',
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `last_login_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '最后登录IP',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(4) DEFAULT '0' COMMENT '用户状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of cj_ucenter_member
-- ----------------------------
INSERT INTO `cj_ucenter_member` VALUES ('15', '那一年', 'a129b591bd914facca99a0152a2d37aa', '1013385@163.com', '', '1386744697', '2130706433', '1387791641', '2130706433', '1386744697', '1');
INSERT INTO `cj_ucenter_member` VALUES ('1', 'admin', 'a129b591bd914facca99a0152a2d37aa', 'cjliunian@163.com', '', '1386661607', '2130706433', '1388657010', '2130706433', '1386661607', '1');
INSERT INTO `cj_ucenter_member` VALUES ('16', 'imya', 'a129b591bd914facca99a0152a2d37aa', '123456@163.com', '', '1386744916', '2130706433', '1389343684', '2130706433', '1386744916', '1');
INSERT INTO `cj_ucenter_member` VALUES ('18', '12424', 'a129b591bd914facca99a0152a2d37aa', '124@qq.com', '', '1386751177', '2130706433', '0', '0', '1386751177', '1');
INSERT INTO `cj_ucenter_member` VALUES ('25', '1111xxxxx', 'a129b591bd914facca99a0152a2d37aa', '12323123@qq.com', '', '1386820301', '2130706433', '0', '0', '1386820301', '1');
INSERT INTO `cj_ucenter_member` VALUES ('21', 'ASDFDFDFDF', 'a129b591bd914facca99a0152a2d37aa', 'qqqqwerewrr@163.com', '', '1386751865', '2130706433', '0', '0', '1386751865', '1');
INSERT INTO `cj_ucenter_member` VALUES ('24', '12312312', 'a129b591bd914facca99a0152a2d37aa', '11111@qqwer.com', '', '1386811497', '2130706433', '0', '0', '1386811497', '1');
INSERT INTO `cj_ucenter_member` VALUES ('29', '这一城', 'aed2a19beabdf4b1666538bd57601254', '1233@163.com', '', '1387779261', '2130706433', '1387779301', '2130706433', '1387779261', '1');
INSERT INTO `cj_ucenter_member` VALUES ('17', '1111', 'a129b591bd914facca99a0152a2d37aa', 'wr@qq.com', '', '1386751160', '2130706433', '0', '0', '1386751160', '1');
INSERT INTO `cj_ucenter_member` VALUES ('28', 'liunian', 'a129b591bd914facca99a0152a2d37aa', 'ssff@163.com', '', '1387764249', '2130706433', '1387776203', '2130706433', '1387764249', '1');
INSERT INTO `cj_ucenter_member` VALUES ('27', '123123zzzzzzzzzz', 'a129b591bd914facca99a0152a2d37aa', '2424234@qqq.com', '', '1386820705', '2130706433', '0', '0', '1386820705', '1');
INSERT INTO `cj_ucenter_member` VALUES ('30', 'cy2014', 'a129b591bd914facca99a0152a2d37aa', '12323@qq.com', '', '1388552188', '2130706433', '0', '0', '1388552188', '1');
INSERT INTO `cj_ucenter_member` VALUES ('31', '2014', 'a129b591bd914facca99a0152a2d37aa', '123123123@qq.com', '', '1388552273', '2130706433', '0', '0', '1388552273', '1');
INSERT INTO `cj_ucenter_member` VALUES ('32', '123123213', 'a129b591bd914facca99a0152a2d37aa', '111@123.com', '', '1388552444', '2130706433', '0', '0', '1388552444', '1');
INSERT INTO `cj_ucenter_member` VALUES ('33', '123213', 'a129b591bd914facca99a0152a2d37aa', '1232@qq.com', '', '1388552509', '2130706433', '0', '0', '1388552509', '1');
INSERT INTO `cj_ucenter_member` VALUES ('34', '1233aaaaa', 'a129b591bd914facca99a0152a2d37aa', 'qewee@xx.com', '', '1388552550', '2130706433', '0', '0', '1388552550', '1');
INSERT INTO `cj_ucenter_member` VALUES ('35', '123123', 'a129b591bd914facca99a0152a2d37aa', '132132@qq.com', '', '1388553144', '2130706433', '0', '0', '1388553144', '1');
INSERT INTO `cj_ucenter_member` VALUES ('36', '123123213123aaaa', 'a129b591bd914facca99a0152a2d37aa', 'sdfsfdf@qq.com', '', '1388553578', '2130706433', '0', '0', '1388553578', '1');
INSERT INTO `cj_ucenter_member` VALUES ('37', '123123333', 'a129b591bd914facca99a0152a2d37aa', 'sdf@qq.com', '', '1388553651', '2130706433', '0', '0', '1388553651', '1');
INSERT INTO `cj_ucenter_member` VALUES ('38', '01233', 'a129b591bd914facca99a0152a2d37aa', '456@qq.com', '', '1388553808', '2130706433', '0', '0', '1388553808', '1');
INSERT INTO `cj_ucenter_member` VALUES ('39', '这是一个测试用户', 'a129b591bd914facca99a0152a2d37aa', 'qwrw@qq.com', '', '1388553851', '2130706433', '0', '0', '1388553851', '1');
INSERT INTO `cj_ucenter_member` VALUES ('40', '0122211', 'a129b591bd914facca99a0152a2d37aa', 'sfsf@qq.com', '', '1388553919', '2130706433', '0', '0', '1388553919', '1');
INSERT INTO `cj_ucenter_member` VALUES ('41', 'bbcbcvb', 'a129b591bd914facca99a0152a2d37aa', '78879@qq.com', '', '1388553998', '2130706433', '0', '0', '1388553998', '1');
INSERT INTO `cj_ucenter_member` VALUES ('42', 'zxc131323', 'a129b591bd914facca99a0152a2d37aa', '12323444@ss.com', '', '1388554156', '2130706433', '0', '0', '1388554156', '1');
INSERT INTO `cj_ucenter_member` VALUES ('43', '1232130234', 'a129b591bd914facca99a0152a2d37aa', '8881232@qq.com', '', '1388554228', '2130706433', '0', '0', '1388554228', '1');
INSERT INTO `cj_ucenter_member` VALUES ('44', 'imya11', 'a129b591bd914facca99a0152a2d37aa', '87754466@qq.com', '', '1388554289', '2130706433', '0', '0', '1388554289', '1');
INSERT INTO `cj_ucenter_member` VALUES ('45', '963123', 'a129b591bd914facca99a0152a2d37aa', '988878798454@qq.com', '', '1388554322', '2130706433', '0', '0', '1388554322', '1');

-- ----------------------------
-- Table structure for cj_ucenter_setting
-- ----------------------------
DROP TABLE IF EXISTS `cj_ucenter_setting`;
CREATE TABLE `cj_ucenter_setting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '设置ID',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配置类型（1-用户配置）',
  `value` text NOT NULL COMMENT '配置数据',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='设置表';

-- ----------------------------
-- Records of cj_ucenter_setting
-- ----------------------------
