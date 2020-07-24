-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 06:03 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshelter_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Acc_ID` int(11) NOT NULL,
  `Type` varchar(225) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Acc_ID`, `Type`, `Username`, `Email`, `Password`) VALUES
(1, 'user', 'user', 'user@gmail.com', '$2y$10$FIW7jZjVO652wi0rc3CAgOD0HAhX634lqxSePwOqdn.j4eqeFP9cC'),
(2, 'admin', 'admin', 'admin@gmail.com', '$2y$10$4mD9adHlhEDZQt31XBLkous5xDJH7n9D3frbl.0NXvOm8ow96PuES'),
(3, 'admin', 'Tim Murphy', 'timmurphy@yahoo.com', '$2y$10$XK1fE/4/IICSSTk1iXTaTem7xZN5iRKyGqRky5MGGRD.U2aGpM7Pe');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Msg_ID` int(11) NOT NULL,
  `Fname` varchar(225) NOT NULL,
  `Lname` varchar(225) NOT NULL,
  `Subject` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Msg_ID`, `Fname`, `Lname`, `Subject`, `Email`, `Message`) VALUES
(1, 'Lau', 'Yuki', 'Request to adopt a cat', 'yukilau15@gmail.com', 'I am writing to you today to request to adopt a cat. Please email at your earliest convenience so we can schedule a time to talk.');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `Pet_ID` int(11) NOT NULL,
  `Image` text NOT NULL,
  `Type` varchar(225) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Breed` varchar(225) NOT NULL,
  `Age` varchar(225) NOT NULL,
  `Gender` varchar(225) NOT NULL,
  `Size` varchar(225) NOT NULL,
  `Content` text NOT NULL,
  `Status` varchar(225) NOT NULL,
  `Tag` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`Pet_ID`, `Image`, `Type`, `Name`, `Breed`, `Age`, `Gender`, `Size`, `Content`, `Status`, `Tag`) VALUES
(1, '335265.jpg', 'Dog', 'Taco', 'Chihuahua', 'Puppy', 'Female', 'Small (0-25 Ibs)', '<p>Taco is being fostered in a home with other small dogs and loves to play with his dog friends and also loves playing with his chew toys and stuffed animals. She also enjoys her walks and being cuddled by his foster mom.</p>\r\n<p>This girl will be great in a home with another small dog, but can also be in an only dog if her person is home quite often or works from home. Taco is at our weekly adoptions, but please contact us if you would like to meet Taco to ensure she will be there.</p>', 'available', 'Dog, Taco, Chihuahua, Puppy, Female, Small (0-25 Ibs)'),
(2, '31930.jpg', 'Cat', 'Begerra', 'Abyssinian', 'Adult', 'Male', 'Large (12-16 Ibs)', '<p>Meet Begerra! He has not had an easy life, but with your help, we hope to change all that. He was found recently, and needs a new home. Begerra is social and sweet, and is learning that he can have a wonderful new life with people who care. His foster mom has been pampering this little angel! Would you like to pamper him too? NOTE: We are currently working with Begerra on a behavioral issue regarding litter box usage. We will let you know how things progress! In the meantime, he will not be attending our adoption events, unless applications are submitted to meet him.</p>', 'available', 'Cat, Begerra, Abyssinian, Adult, Male, Large (12-16 Ibs)'),
(3, '295253.jpg', 'Cat', 'Siri', 'Domestic Short Hair ', 'Young', 'Female', 'Large (12-16 Ibs)', '<p>Beautiful Siri is a grey female domestic short hair, who came to us from a local animal control shelter, where she was in danger of euthanasia. She has a little bit of an attitude at first, until she gets to know you, which is totally fine because that means she is smart. But she does have anxiety which causes her to be defensive and unpredictable. She really does require an experienced adopter, and cannot be around kids or other cats or dogs. She needs a dedicated special friend. Who would love Siri in their life?</p>', 'available', 'Cat, Siri, Domestic Short Hair , Young, Female, Large (12-16 Ibs)'),
(4, '447892.jpg', 'Cat', 'Lucyfurr', 'Siamese', 'Young', 'Female', 'Small (0-6 Ibs)', '<p>Meet Lucyfurr! She was rescued from the pound as a kitten, but due to medical problems of her humans, they regretfully need to find her a new home. Lucyfurr is kind, social, and easy going. She is a great little companion, who anyone would be eager to come home to. Can you be her new happy forever home?</p>', 'available', 'Cat, Lucyfurr, Siamese, Young, Female, Small (0-6 Ibs)'),
(5, '71246.jpg', 'Dog', 'Hula', 'Golden Retriever ', 'Adult', 'Female', 'Small (0-25 Ibs)', '<p>Hula&nbsp;weighs about 20 lbs, is 2-3 yrs old. She is shy at first, but will warm up when she is comfortable. She would love a large yard. She is not a ranch dog that guards animals and property as she would rather be with her people; but she can certainly hang out at a ranch and is comfortable around animals. She plays well with other dogs.</p>\r\n<p>She is crate and leash trained and she would be a great hiking/camping buddy. She loves kids, but six and over would be best due to her large size, no cats please. Hula&nbsp;is an exceptional dog. Please consider giving them a chance. If you would like to meet Hula, please contact us to ensure they will be at adoptions.</p>', 'available', 'Dog, Hula, Golden Retriever , Adult, Female, Small (0-25 Ibs)'),
(6, '180293.jpg', 'Dog', 'Alex', 'Labrador Retriever', 'Young', 'Female', 'Large (61-100 Ibs)', '<p>Alex is an amazing girl! She loves going on hikes and loves to go to the beach and play in the water. She also will play fetch and will bring the ball back right to your hand. Though at this writing, she is only 6 months old, she is very good in the home and does not chew or destroy household items. She is currently being fostered in a home with a small dog and is also good with cats and is submissive to small dogs.&nbsp;Alex&nbsp;is a very active dog and will need another active dog in the home and a home with a yard is preferred due to her activity level. If you would like to meet&nbsp;Alex please contact the email above to assure she will be at adoption.</p>', 'adopted', 'Dog, Alex, Labrador Retriever, Young, Female, Large (61-100 Ibs)');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `Pos_ID` int(11) NOT NULL,
  `Image` text NOT NULL,
  `Title` varchar(225) NOT NULL,
  `Author` varchar(225) NOT NULL,
  `Content` text NOT NULL,
  `Postdate` date NOT NULL,
  `Status` varchar(225) NOT NULL,
  `Tag` varchar(300) NOT NULL,
  `Updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Pos_ID`, `Image`, `Title`, `Author`, `Content`, `Postdate`, `Status`, `Tag`, `Updated`) VALUES
(1, '581874.jpg', 'Can You Foster or Adopt During the Coronavirus Quarantine?', 'admin', '<p>Schools are closed, restaurants are closed, gatherings are limited, and many people are avoiding public places altogether &mdash; life as we know it has changed dramatically over the last few days thanks to the coronavirus pandemic (COVID-19). Unfortunately, animal shelters and rescues have also been impacted by the disruptions caused by COVID-19.</p>\r\n<p>&nbsp;</p>\r\n<h3>Shelters Temporarily Closing</h3>\r\n<p>Due to requests from officials that Americans practice social distancing to reduce the spread of the virus, many cities across the country have basically shut down. Animal shelters and rescues are operating with a reduced workforce and some have had to close to the public or cancel events. It&rsquo;s likely that many more will need to do so as more cities take steps to slow down the virus, which would halt pet adoptions, and possibly prevent new animals from coming in. The closures would also mean shelter pets will have fewer interactions with people.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h3>Help by Fostering</h3>\r\n<p>Those of us that are already spending more time at home may be able to help during coronavirus quarantines. Shelters across the country are urging animal lovers to foster while practicing social distancing. They are hoping to reduce the strain on pets, and their facilities, by moving as many animals as possible out of shelters and into foster homes. Fostering a pet typically means temporarily bringing an adoptable pet into your home while he or she waits for a more permanent home. Foster parents help prevent overcrowding in shelters, and can be especially helpful for animals that are stressed out or need special care.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h3>Consider Pet Adoption</h3>\r\n<p>If you are able to take in a pet permanently and live near a shelter or rescue that is still accepting adoption applications, right now is a perfect time to bond with a new pet. Since many of us are working from home, or have had to stop working altogether, there is more time available to train a new pet and really enjoy the early days of pet ownership. Studies have also shown that pets can lower stress levels, so a new puppy or cat may even help reduce some of the anxiety most of us are feeling.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>You can find an organization near you by searching through our site. Official announcements about the COVID-19 are changing rapidly so it is a good idea to call ahead and to find out if your local shelter is still open. If the shelters and rescues near you are no longer accepting adopters or fosters, you can also donate or contact a food bank to see if they are taking supplies.</p>', '2020-07-23', 'published', 'foster, adopt, coronavirus, quarantine', '2020-07-23 14:15:25'),
(2, '516421.jpg', 'American Rescue Dog Show Adoption Marathon', 'Tim Murphy', '<p>We&rsquo;ve teamed up with Hallmark Channel once again to celebrate rescue pets and all their unique talents.&nbsp; This weekend, the network will premiere the third annual American Rescue Dog Show, where you&rsquo;ll see talented pets show off their best in wiggling, their adorable underbites, and much more! You don&rsquo;t want to miss all the cuteness, so tune in on 2/16 and 2/17 at 8/7c. And, if you want to check out some fur friends in real life, Adopt-a-Pet.com and Hallmark Channel will be hosting an &ldquo;American Rescue Dog Show Adoption Marathon,&rdquo; February 15 &ndash; 29 in conjunction with the show.&nbsp;</p>\r\n<p>Shelters and rescues across the country have signed up to show you their very own award worthy pets! The organizations participating will also have a chance to win one of several grants totaling $25,000. Visit them and show your support of their adoption and rescue efforts! Look for an adoption event near you in the search below and take home your own &ldquo;Best in Show!&rdquo;:</p>', '2020-07-24', 'published', 'american, rescue, dog, show, adoption, marathon', '2020-07-24 09:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `Sub_ID` int(11) NOT NULL,
  `Email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`Sub_ID`, `Email`) VALUES
(1, 'yukilau15@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Acc_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Msg_ID`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`Pet_ID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`Pos_ID`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`Sub_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Acc_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Msg_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `Pet_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `Pos_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `Sub_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
