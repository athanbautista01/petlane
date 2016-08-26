-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2016 at 05:36 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petlane`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `AppointmentID` int(11) NOT NULL,
  `UserOneID` int(11) NOT NULL,
  `UserTwoID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Reason` varchar(300) NOT NULL,
  `DateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`AppointmentID`, `UserOneID`, `UserTwoID`, `Date`, `Time`, `Reason`, `DateAdded`) VALUES
(15, 4, 3, '2016-03-25', '00:25', 'joseph', '2016-03-24'),
(19, 101, 2, '2016-04-22', '17:02', 'asas', '2016-04-03'),
(20, 5, 1, '2016-04-01', '03:13', 'asfasfasfasfasfasfasfasfas safsafasfasfas', '2016-04-03'),
(21, 943, 2, '2016-03-29', '00:12', '121212121', '2016-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `BlogID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Image` varchar(400) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Content` varchar(10000) NOT NULL,
  `DateAdded` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`BlogID`, `UserID`, `Image`, `Title`, `Content`, `DateAdded`, `Status`) VALUES
(1, 1, 'images/blogs/Pets.jpg', 'Best Pets of Today', 'Every dog knows that he needs to keep up to date with the news from the canine world. He understands the importance of learning more about where other dogs live, how they train their humans, and how to stay in touch with fellow dogs from all over the world.\nIn reality, of course the days are short and there are lamp posts to sniff, balls to chase and mud puddles to roll around in and it is not easy to stay on top of everything.\nSo to help my canine friends out there to stay in touch and up to date I have compiled a list of the very best dog blogs and websites I could find. I wanted to call it Alfies ultimate list of dog blogs or the best dog blogs ever or even compulsory reading for dogs and puppies of all ages, but in the end I settled for top dog blogs and I think that covers it!\n\n', '2016-03-16', 'Approve'),
(2, 2, 'images/blogs/dog-park-mom.jpg', 'Favorite Pet Blog', 'So to help my canine friends out there to stay in touch and up to date I have compiled a list of the very best dog blogs and websites I could find. I wanted to call it Alfies ultimate list of dog blogs or the best dog blogs ever or even compulsory reading for dogs and puppies of all ages, but in the end I settled for top dog blogs and I think that covers it! I will add links whenever I find new and exciting blogs out there, so please come back regularly. Enjoy your reading and if you are a new friend of mine and would like your blog added to my list, then please leave a comment below and I will get in touch as soon as I have finished my dinner.', '2016-03-08', 'Approve'),
(3, 5, 'images/blogs/blog1.jpg', 'How to Train Your Dog to Wear a Costume', 'No vel nonumy viderer. Duo pertinax cotidieque at, eum te integre detraxit philosophia, quando dictas mea an. Putent nostrud in per, reque persequeris sea ad. At mei graeci cotidieque neglegentur, id ius omittam commune suscipiantur. Ne his tamquam percipit expetenda, soleat omittam ea sea.<br><br>\n\nVel et aliquam molestie, vix ea noster verear. Sea ei tollit urbanitas. Ne erat nemore duo, alia probatus vis at, cibo libris deserunt ea mei. Ex his nonumes dignissim.<br><br>\n\nHas at quod malis, ad tollit oportere duo. Sint soluta iriure ad eos, fuisset theophrastus et nec. Vero facilis ei mea, porro patrioque consectetuer eu pro. Cu graeco aeterno recusabo cum.<br><br>\n\nHas ad enim erat vituperata, mei magna fuisset an, sit an numquam singulis. Nec te magna dissentias, dictas eloquentiam sit cu. In sumo conceptam per, suscipit voluptatum ius et, eu mel augue partiendo suavitate. Te dico voluptaria pri, ea mel enim omnium noluisse, sint omnes principes eu quo. Ut commodo utroque mentitum quo, elitr doctus ut mei, quando vocibus ad qui.<br><br>\n\nIn tritani hendrerit consectetuer duo. Illud errem sed ea, ex eam erant doming viderer. Cum utinam veritus offendit in. Te iusto indoctum conceptam mel. Ei nihil accusam iudicabit nec. Vix id erat prima dissentiunt.<br><br>\n\nCommodo maiorum dissentiunt usu ne, sint pertinacia sea ut, sed eu perfecto honestatis. No consequat disputationi ius, an wisi iudicabit inciderint pro, diam atqui ei mea. Ea quis sumo elit eos, eam vero consequat contentiones ei. Has ex omnesque partiendo posidonium, pri ea natum fugit libris.<br><br>\n\nUsu unum quando deseruisse at. Eu qui graecis suavitate, minim pertinax ex eum. Id vis impedit delectus perfecto, cum illud fastidii aliquando ea, summo novum atomorum vis te. Sed solum putent id, usu cu nemore debitis oportere, nihil utroque principes mei ea.<br><br>\n\nIus ad verear pertinax evertitur, cu qui rebum inani malorum, dicit soluta corrumpit nam an. Id placerat ocurreret vis, ut cum fugit fastidii evertitur, nam labitur periculis at. Eum cu interpretaris necessitatibus. Et exerci oportere sit, quem ferri evertitur mel an.<br><br>\n\nNam id voluptaria disputando. Vim ne agam assentior, agam intellegat concludaturque eu vix. Eam ad alienum albucius, te duo oratio doming hendrerit. Pro et assum audiam deseruisse, qui vitae viderer assentior ne, in sea graeco molestiae. Nam nisl volutpat ad, no vim facer paulo dolores.<br><br>\n\nEt his solet epicurei. Alienum insolens volutpat ius at, saepe nominavi oporteat an ius. Facete civibus ea vix, ad eam perfecto adipiscing reprimique. Quo aperiam adipisci te, ipsum animal eum ex. In meis simul oportere mel, ut modus admodum mel.', '2016-04-02', 'Approve'),
(4, 2, 'images/blogs/post3.jpg', 'Dog Training Tips â€“ How To Train a Dog', 'No vel nonumy viderer. Duo pertinax cotidieque at, eum te integre detraxit philosophia, quando dictas mea an. Putent nostrud in per, reque persequeris sea ad. At mei graeci cotidieque neglegentur, id ius omittam commune suscipiantur. Ne his tamquam percipit expetenda, soleat omittam ea sea.\n<br><br>\nVel et aliquam molestie, vix ea noster verear. Sea ei tollit urbanitas. Ne erat nemore duo, alia probatus vis at, cibo libris deserunt ea mei. Ex his nonumes dignissim.\n<br><br>\nHas at quod malis, ad tollit oportere duo. Sint soluta iriure ad eos, fuisset theophrastus et nec. Vero facilis ei mea, porro patrioque consectetuer eu pro. Cu graeco aeterno recusabo cum.\n<br><br>\nHas ad enim erat vituperata, mei magna fuisset an, sit an numquam singulis. Nec te magna dissentias, dictas eloquentiam sit cu. In sumo conceptam per, suscipit voluptatum ius et, eu mel augue partiendo suavitate. Te dico voluptaria pri, ea mel enim omnium noluisse, sint omnes principes eu quo. Ut commodo utroque mentitum quo, elitr doctus ut mei, quando vocibus ad qui.\n<br><br>\nIn tritani hendrerit consectetuer duo. Illud errem sed ea, ex eam erant doming viderer. Cum utinam veritus offendit in. Te iusto indoctum conceptam mel. Ei nihil accusam iudicabit nec. Vix id erat prima dissentiunt.\n<br><br>\nCommodo maiorum dissentiunt usu ne, sint pertinacia sea ut, sed eu perfecto honestatis. No consequat disputationi ius, an wisi iudicabit inciderint pro, diam atqui ei mea. Ea quis sumo elit eos, eam vero consequat contentiones ei. Has ex omnesque partiendo posidonium, pri ea natum fugit libris.\n<br><br>\nUsu unum quando deseruisse at. Eu qui graecis suavitate, minim pertinax ex eum. Id vis impedit delectus perfecto, cum illud fastidii aliquando ea, summo novum atomorum vis te. Sed solum putent id, usu cu nemore debitis oportere, nihil utroque principes mei ea.\n<br><br>\nIus ad verear pertinax evertitur, cu qui rebum inani malorum, dicit soluta corrumpit nam an. Id placerat ocurreret vis, ut cum fugit fastidii evertitur, nam labitur periculis at. Eum cu interpretaris necessitatibus. Et exerci oportere sit, quem ferri evertitur mel an.\n<br><br>\nNam id voluptaria disputando. Vim ne agam assentior, agam intellegat concludaturque eu vix. Eam ad alienum albucius, te duo oratio doming hendrerit. Pro et assum audiam deseruisse, qui vitae viderer assentior ne, in sea graeco molestiae. Nam nisl volutpat ad, no vim facer paulo dolores.\n<br><br>\nEt his solet epicurei. Alienum insolens volutpat ius at, saepe nominavi oporteat an ius. Facete civibus ea vix, ad eam perfecto adipiscing reprimique. Quo aperiam adipisci te, ipsum animal eum ex. In meis simul oportere mel, ut modus admodum mel.', '2016-04-02', 'Approve'),
(5, 2, 'images/blogs/post5.jpg', '8 Sports Your Dog Can Play', 'No vel nonumy viderer. Duo pertinax cotidieque at, eum te integre detraxit philosophia, quando dictas mea an. Putent nostrud in per, reque persequeris sea ad. At mei graeci cotidieque neglegentur, id ius omittam commune suscipiantur. Ne his tamquam percipit expetenda, soleat omittam ea sea.\r\n<br><br>\r\nVel et aliquam molestie, vix ea noster verear. Sea ei tollit urbanitas. Ne erat nemore duo, alia probatus vis at, cibo libris deserunt ea mei. Ex his nonumes dignissim.\r\n<br><br>\r\nHas at quod malis, ad tollit oportere duo. Sint soluta iriure ad eos, fuisset theophrastus et nec. Vero facilis ei mea, porro patrioque consectetuer eu pro. Cu graeco aeterno recusabo cum.\r\n<br><br>\r\nHas ad enim erat vituperata, mei magna fuisset an, sit an numquam singulis. Nec te magna dissentias, dictas eloquentiam sit cu. In sumo conceptam per, suscipit voluptatum ius et, eu mel augue partiendo suavitate. Te dico voluptaria pri, ea mel enim omnium noluisse, sint omnes principes eu quo. Ut commodo utroque mentitum quo, elitr doctus ut mei, quando vocibus ad qui.\r\n<br><br>\r\nIn tritani hendrerit consectetuer duo. Illud errem sed ea, ex eam erant doming viderer. Cum utinam veritus offendit in. Te iusto indoctum conceptam mel. Ei nihil accusam iudicabit nec. Vix id erat prima dissentiunt.\r\n<br><br>\r\nCommodo maiorum dissentiunt usu ne, sint pertinacia sea ut, sed eu perfecto honestatis. No consequat disputationi ius, an wisi iudicabit inciderint pro, diam atqui ei mea. Ea quis sumo elit eos, eam vero consequat contentiones ei. Has ex omnesque partiendo posidonium, pri ea natum fugit libris.\r\n<br><br>\r\nUsu unum quando deseruisse at. Eu qui graecis suavitate, minim pertinax ex eum. Id vis impedit delectus perfecto, cum illud fastidii aliquando ea, summo novum atomorum vis te. Sed solum putent id, usu cu nemore debitis oportere, nihil utroque principes mei ea.\r\n<br><br>\r\nIus ad verear pertinax evertitur, cu qui rebum inani malorum, dicit soluta corrumpit nam an. Id placerat ocurreret vis, ut cum fugit fastidii evertitur, nam labitur periculis at. Eum cu interpretaris necessitatibus. Et exerci oportere sit, quem ferri evertitur mel an.\r\n<br><br>\r\nNam id voluptaria disputando. Vim ne agam assentior, agam intellegat concludaturque eu vix. Eam ad alienum albucius, te duo oratio doming hendrerit. Pro et assum audiam deseruisse, qui vitae viderer assentior ne, in sea graeco molestiae. Nam nisl volutpat ad, no vim facer paulo dolores.\r\n<br><br>\r\nEt his solet epicurei. Alienum insolens volutpat ius at, saepe nominavi oporteat an ius. Facete civibus ea vix, ad eam perfecto adipiscing reprimique. Quo aperiam adipisci te, ipsum animal eum ex. In meis simul oportere mel, ut modus admodum mel.', '2016-04-02', 'Approve'),
(6, 2, 'images/blogs/post11.jpg', 'Cat Health Care | Veterinary Advice For Cat Owners', 'No vel nonumy viderer. Duo pertinax cotidieque at, eum te integre detraxit philosophia, quando dictas mea an. Putent nostrud in per, reque persequeris sea ad. At mei graeci cotidieque neglegentur, id ius omittam commune suscipiantur. Ne his tamquam percipit expetenda, soleat omittam ea sea.\r\n<br><br>\r\nVel et aliquam molestie, vix ea noster verear. Sea ei tollit urbanitas. Ne erat nemore duo, alia probatus vis at, cibo libris deserunt ea mei. Ex his nonumes dignissim.\r\n<br><br>\r\nHas at quod malis, ad tollit oportere duo. Sint soluta iriure ad eos, fuisset theophrastus et nec. Vero facilis ei mea, porro patrioque consectetuer eu pro. Cu graeco aeterno recusabo cum.\r\n<br><br>\r\nHas ad enim erat vituperata, mei magna fuisset an, sit an numquam singulis. Nec te magna dissentias, dictas eloquentiam sit cu. In sumo conceptam per, suscipit voluptatum ius et, eu mel augue partiendo suavitate. Te dico voluptaria pri, ea mel enim omnium noluisse, sint omnes principes eu quo. Ut commodo utroque mentitum quo, elitr doctus ut mei, quando vocibus ad qui.\r\n<br><br>\r\nIn tritani hendrerit consectetuer duo. Illud errem sed ea, ex eam erant doming viderer. Cum utinam veritus offendit in. Te iusto indoctum conceptam mel. Ei nihil accusam iudicabit nec. Vix id erat prima dissentiunt.\r\n<br><br>\r\nCommodo maiorum dissentiunt usu ne, sint pertinacia sea ut, sed eu perfecto honestatis. No consequat disputationi ius, an wisi iudicabit inciderint pro, diam atqui ei mea. Ea quis sumo elit eos, eam vero consequat contentiones ei. Has ex omnesque partiendo posidonium, pri ea natum fugit libris.\r\n<br><br>\r\nUsu unum quando deseruisse at. Eu qui graecis suavitate, minim pertinax ex eum. Id vis impedit delectus perfecto, cum illud fastidii aliquando ea, summo novum atomorum vis te. Sed solum putent id, usu cu nemore debitis oportere, nihil utroque principes mei ea.\r\n<br><br>\r\nIus ad verear pertinax evertitur, cu qui rebum inani malorum, dicit soluta corrumpit nam an. Id placerat ocurreret vis, ut cum fugit fastidii evertitur, nam labitur periculis at. Eum cu interpretaris necessitatibus. Et exerci oportere sit, quem ferri evertitur mel an.\r\n<br><br>\r\nNam id voluptaria disputando. Vim ne agam assentior, agam intellegat concludaturque eu vix. Eam ad alienum albucius, te duo oratio doming hendrerit. Pro et assum audiam deseruisse, qui vitae viderer assentior ne, in sea graeco molestiae. Nam nisl volutpat ad, no vim facer paulo dolores.\r\n<br><br>\r\nEt his solet epicurei. Alienum insolens volutpat ius at, saepe nominavi oporteat an ius. Facete civibus ea vix, ad eam perfecto adipiscing reprimique. Quo aperiam adipisci te, ipsum animal eum ex. In meis simul oportere mel, ut modus admodum mel.', '2016-04-02', 'Approve'),
(7, 4, 'images/blogs/b1.png', '5 Questions to Ask Before Getting Your Next Pet', 'Congratulations â€“ youâ€™re getting a new furry addition to the family!\r\n\r\nOf course, now that youâ€™ve decided youâ€™re ready for the pitter patter of paws, there are lots of other decisions to be made. Most importantly, what kind of furry friend will you be looking for?\r\n\r\nYou probably know whether you want a cat or dog, and perhaps you even have a preference for male or female, but have you considered age? Getting a new furry friend doesnâ€™t necessarily mean having to deal with crazy puppy and kitten antics (as much fun as they can be!) â€“ there are lots of options available to adopt an adult or senior pet.\r\n\r\nWhen deciding what age pet to get, its important to look at your current lifestyle and what home environment youâ€™re bringing your new furry friend into.\r\n\r\n1. How much time do you have? This is important to consider with younger animals as they do require more exercise, attention and training. Older animals are generally more obedient, already toilet trained, and require less time. While they may be starting to slow down a little, if you are the type who is active all day and just want to relax when you get home, maybe an older pet is for you!\r\n\r\n2. How much patience do you have? Are you able to commit to puppy classes, prepared for cleaning up lots of accidents, and okay with possibly seeing a beloved piece of furniture/items destroyed by your hyperactive younger pet? The most common age that dogs are surrendered to pounds is between 6 months and 18 months when they are entering their challenging adolescent stage. Getting a dog who is older than this can be much less work.\r\n\r\n3. How often are you home? Most younger pets donâ€™t do well being kept alone by themselves. They may try to escape, bark or become destructive. Older pets are generally more settled and happy to snooze the day away until youâ€™re back from work.\r\n\r\n4. How active are you? Often, well-meaning family members who are worried that their (grand)parents are lonely, will buy them a puppy or kitten. What they havenâ€™t considered is that their (grand)parent may have difficulty bending down to change that kitty litter or take their new puppy for 30 minute walks twice a day. Little pets that are running around underfoot can also be a dangerous trip hazard for older people with mobility issues. Of course, if youâ€™re someone who likes to go running, then an active younger dog may be the perfect running companion!\r\n\r\n5. What do you want from your pet? Are you looking for a pet to exercise with, take out to the dog park, and play with your kids for hours? Then a puppy or kitten may be the best fit. If youâ€™re looking for a calm companion, then an older pet may be more suited.\r\n\r\nChoosing a new furry family member is a big decision. Itâ€™s important to objectively think about your individual circumstances, and whether theyâ€™d better suit a puppy/kitten or an older pet.', '2016-04-05', 'Approve'),
(8, 4, 'images/blogs/b2.png', 'A Doggie Kiss A Day Keeps the Doctor Away', 'I think most people get a little uncomfortable when their dog puckers up and somehow lands a sloppy kiss on the lips. In theory, itâ€™s kind of cute. In reality, you canâ€™t wipe it away fast enough â€“ we do know where those mouths have been!\r\n\r\nThis proposal may come as a surprise, as you instinctively start to raise the back of your hand to your mouth at the mere mention of doggie kisses.\r\n\r\nApparently, smooching our pets is not so much disgusting as it is good for our health.\r\n\r\nIt is very true that dogs and humans have a unique bond, and researchers at the University of Arizona want to get to the bottom of what drives this relationship. We know a lot of it has to do with their smarts, their smiles and their infinite capacity for snuggles. But it is also true that people with dogs are healthier, and that is a trend that spans from young children all the way through to adults.\r\n\r\nChildren seem to benefit from being around dogs, by experiencing less immune problems like asthma and allergies. The researchers are proposing that the canine â€œcootiesâ€ we are exposed to have a probiotic effect, and that this good bacteria boosts our immune response by building healthy bacteria colonies.\r\n\r\nIt is perfectly plausible that good-guy dogs are helping us with our health at a micro-level as well as at a lifestyle level. Weâ€™ll just have to add it to the ever-growing list of the ways owning a dog significantly improves your life.\r\n\r\nIf you happen to be one of those people whose love for their dog knows no bounds, perhaps you should pucker up! I think I might wait for the results of the research to be released. Until then, I imagine Iâ€™ll continue to dodge the doggie kisses, but maybe I will hesitate before I wipe away one of those surprise smooches that they manage to land occasionally.', '2016-04-05', 'Approve'),
(9, 4, 'images/blogs/b3.png', 'Are You Ready for a Pet Bird?', 'Coming home to the enthusiastic greetings of your flock after a long day at work is one of lifeâ€™s greatest pleasures. Before you add companion birds to your family, though, check these tips and make sure youâ€™re prepared for the leap.\r\n\r\n\r\nParrots, songbirds and pigeons are intelligent, social animals. (Okay, some people might quibble about the intelligence of some rock pigeonsâ€¦) The same cleverness and flocking instincts that make them particularly attractive pets are also reflected in some of the difficulties in keeping them healthy.\r\n\r\nTHE GOOD\r\n\r\nIntelligent â€“ The idea of a â€œbird brainâ€ being stupid is nonsense. Birds can count, recognize words, and learn tricks. Some kinds can learn to speak. For a long time, people believed that the parrots and starlings were simply mimicking sounds. They can actually compose sentences that are appropriate for the situation, and talk around the words they donâ€™t know, just like a human trying to speak a foreign language.\r\nFriendly â€“ Most pet birds enjoy cuddles and scratches, and they love to be involved in whatever youâ€™re doing. Your budgie, myna, or conjure will enjoy crawling around on you while you lounge in front of the telly or chat online with your friends. The finches will sing along with your YouTube videos.\r\nBeautiful â€“ What else needs to be said here?\r\n\r\nTHE BAD\r\n\r\nEasily bored â€“ If a dog is bored too often, he might chew things he shouldnâ€™t and make a mess. If a pet bird is bored too often, he gets depressed and starts to cut himself or pull out his feathers. This is especially difficult with a single bird. If you decide to adopt a bird, consider getting two or more, so they can keep each other company.\r\nRisk of injury â€“ This is mainly about the parrots. A frightened bird will bite. The beaks that are meant to dig into live trees and to crack open walnuts are strong and sharp enough to draw blood. The larger ones can bite off fingers. Never leave small children alone with a pet parrot. If there are children in the home, enforce the rule that they never approach the parrot without you or another adult whom the parrot trusts.\r\nCost â€“ Care and maintenance of a bird is not a cheap hobby. Food and chew-toys for two or three conures or cockatiels will run approximately $100 a month. The same for five or six finches will often come to $25-50. This is not including the purchase price of the animal, the cages, the first round of toys and dishes, or veterinary fees. You probably donâ€™t want to know the monthly costs for the largest macaws, but hereâ€™s a hint: the price of a single chew-toy to last three or four days is in the range of $60-120.\r\nNoise â€“ Some kinds of birds are surprisingly loud, even when they are calm and happy. Will you always be living in situations that can tolerate this? If not, be very careful in your choice of pet.\r\nPet-sitting and long-term care â€“ It can be very difficult to find a competent pet sitter for a bird. Start your search early, and introduce the sitter to the bird before his services are needed. If you choose a type of parrot, youâ€™ll also need to make arrangements for someone else to take in the birds when you are no longer around to care for them. Again, start early and also contact the local rescue organizations.\r\n\r\nTHE VERDICT?\r\n\r\nYouâ€™ve given it some thought and investigated all the details about your favourite species. If youâ€™re sure youâ€™re ready to add a bird or three to your family, wait a week and then start looking for the right individual birds. Not everybody was as careful when they added a bird to the household, so there are many rescue birds in foster care and parrot shelters.  Consider helping one or more of these birds find their forever home.', '2016-04-05', 'Approve'),
(10, 4, 'images/blogs/b4.png', 'Bird Tricks: A Bird Training Guide for Beginners', 'Birds learn via observation and imitation, so what your bird learns depends on how much time and effort you are willing to put into their training.\r\n\r\nEver been called â€˜bird brain?â€™ It doesnâ€™t say a whole lot about the species intelligence, does it? However, scientific studies have shown that birds are actually quite intelligent and can be taught to perform a range of basic and advanced tricks.\r\n\r\nWe share our favorite bird training tips for beginners that will help ensure â€˜Pollyâ€™ is the center of attention at your next party.\r\n\r\nPOLLY WANT A CRACKER?\r\n\r\nTeaching Polly to talk is one of the more harder things to teach her and will take time, persistence and praise. Make sure to be consistent in your approach and be calm and clear when talking to her.\r\n\r\nStep 1 â€“ Be precise and remember to say the same word or phrase each time. Teach Polly one word/phrase at a time to ensure that she doesnâ€™t get confused or flustered. For example, starting with â€˜helloâ€™ or using her name until she understands the word is far easier than using a string of words at the one time. Say the words often and try to use the same tone so she gets used to the word and how you say it.\r\n\r\nStep 2 â€“ Make sure Polly is in front of you when you are teaching her to speak so she can watch you speak. As mentioned earlier, one of the ways our beloved feathery friends learn how to talk is via imitation and through visual learning. This is a sure way to get her attention!\r\n\r\nStep 3 â€“ Make sure to use the same facial expressions and sound excitement when youâ€™re training Polly as it is more likely to get her attention.\r\n\r\nStep 4 â€“ Teaching her to speak can take days, weeks or even months! Some birds are even known never to talk, so donâ€™t feel discouraged if it takes a little longer than expected. The key is persistence and patience. Set up a routine and stick to it. For example, having 2 lessons a day at 5-10 minutes at a time is far more effective than having ad-hoc sessions once every few days. She will forget what you are trying to teach her if you are not consistent.\r\n\r\nStep 5 â€“ Visual aids, such as You Tube videos or other birds that are able to talk can also help the process. Many birds have been known to watch You Tube videos are start talking!\r\n\r\nStep 6 â€“ Make sure to shower Polly with love, affection and most importantly- treats when she demonstrates the correct behavior!\r\n\r\nDOES POLLY WANT THE POTTY?\r\n\r\nYou can toilet train your cats and dogs, so why not your bird? This skill, if taught correctly can be extremely handy. This will take some time and will require routine and getting to know your birdâ€™s habits!\r\n\r\nStep 1 â€“ Familiarize yourself with Pollyâ€™s habits. When does she tend to use the bathroom? How often? Where? What signs does she demonstrate? The below are classic signs that your bird may be ready to do its thing:\r\n\r\nRuffling of feathers\r\nA certain facial expression/head movements\r\nNoises\r\nCircling/ scratching\r\nCertain posture\r\nTimes (minutes in between their business)\r\nBirds tend to do their business every few minutes. Between 5-15 minutes is generally expected, however your bird may be different, hence why it is important to watch and understand his or her habits!\r\n\r\nStep 2 â€“ Frequency- getting a general idea of Pollyâ€™s movements will help you to identify when to get prepared. So take a few days to monitor her habits and watch where she tends to do her business.\r\n\r\nStep 3 â€“ Choose a spot where youâ€™d like your bird to do its business and stick with it. Like a cat or dog, change and inconsistency can throw him or her, so itâ€™s imperative that you stick with the one spot so your bird can associate the one spot with doing its business.\r\n\r\nStep 4 â€“ Take Polly over to your chosen location and wait! If after a few minutes she has not done her business, move her away from the spot and let her carry on. After 5-10 minutes, move her back to that designated spot and try again. This may take days or even weeks to achieve, so donâ€™t be disappointed if she doesnâ€™t understand what you are trying to do straight away!\r\n\r\nStep 5 â€“ When it does eventually happen, make sure you praise your feathery companion verbally and with treats!\r\n\r\nStep 6 â€“ Keep repeating the training a couple of times a day and remember to speak softly and offer positive reinforcements.\r\n\r\nPOLLYâ€™S TIME TO STEP UP\r\n\r\nâ€˜Stepping upâ€™ or â€˜Upâ€™ is a playful trick you can teach Polly after she is familiar and comfortable with you. Like other tricks, this will also take some time!\r\n\r\nStep 1 â€“ Ensure Polly is used to you and her surroundings. This is most important to establish before attempting this trick. Make sure her cage is away from loud noises and is in a place where she can hear and see you and others often. Getting Polly familiar with humans and general noises early is a good habit.\r\n\r\nStep 2 â€“ Spend time throughout the day next to her cage and talk to her so she knows your voice and becomes used to your tone and pitch.\r\n\r\nStep 3 â€“ Slowly start moving in front of the cage and if Polly doesnâ€™t shy away, open her cage and put your hand inside and offer her some Millet Spray. Keep in mind that she may get scared, which is completely normal, especially if she is a new/young bird. If she tries to fly away or doesnâ€™t come to you, keep persisting until she comes to you. This part of the process can take a few days to accomplish.\r\n\r\nStep 4 â€“ When she is used to your hand, take a perch and slowly move it towards her and press gently on her tummy and say â€˜Upâ€™ or â€˜Step Up!â€™ Practice this over the next few days until she associates the action with word/phrase. Also ensure that you stick with the same word/phrase so she doesnâ€™t get confused.\r\n\r\nStep 5 â€“ When Polly does â€˜Step upâ€™ make sure to verbally praise her and give her a delicious treat for her efforts!\r\n\r\nStep 6 â€“ When she has mastered stepping up on the perch, put your finger on top of the perch and keep practicing â€˜Step Up.â€™\r\n\r\nStep 7 â€“ When she is able to do this with your finger on the perch, take away the perch and ask her to â€˜Step upâ€™ onto your finger.\r\n\r\nStep 8 â€“ When Polly has mastered this, itâ€™s time to take her out of her cage and attempt the trick elsewhere. Before you do this, we recommend that you close all windows and doors and make sure the area is free of loud noises and hazards!\r\n\r\nPOLLY WANT TO DANCE?\r\n\r\nThink your bird has talent? What better way to prove it than teaching her how to dance!\r\n\r\nStep 1 â€“ Choose a dance space and stick with it. A bench is ideal or any flat surface will do just fine! Just remember to keep using the same spot so Polly can associate that spot as her dance floor!\r\n\r\nStep 2 â€“ Play her some medium to fast upbeat music and see what she responds to. This may take a few attempts, so remember to be patient. Once you see her starting to react to a particular song, use this one to teach her! Birds tend to respond to rhythmic and upbeat tunes.\r\n\r\nStep 3 â€“ Imitation is the sincerest form of flattery- so show your bird your moves! As you now know, birds learn visually and through imitation so you bopping your head or swaying will teach her to dance!\r\n\r\nStep 4 â€“ Remember to recognize her achievements and reward positive behaviors!\r\n\r\nBIRD TRAINING BASICS\r\n\r\nSo there you have it! Birds are not as unintelligent as they have previously been said to be. Teaching any pet takes time and practice so keep this in mind and donâ€™t expect the world from him or her! Here are a few tips that will make things easier:\r\n\r\nDonâ€™t push her. If she is not in the mood to learn or seems tired or distracted, chances are she will not be the best student. Remove her from her training area and place her back in her cage. Let her do her own thing for 10-15 minutes and try again if she seems focused.\r\nMake sure your training locations are in a safe place and away from any loud noises, so she can feel safe and uninitiated. She is more likely to learn if she is comfortable and familiar with her surroundings. Also remember to keep the training in the same spot so she associates that place with the behavior being taught.\r\nDonâ€™t raise your voice or yell at your bird! This can confuse them as birds do not associate you yelling/raising your voice as a corrective thing. They can get confused and believe that you are excited, hence promoting the wrong behaviors. Yelling can also scare your bird which can cause disinterest and fear in learning tricks.\r\nDonâ€™t reward the wrong behaviors! Reward the right behaviors with patting, verbal reinforcements and through treats.\r\nAnd most importantly, shower Polly with love and affection!', '2016-04-05', 'Approve'),
(11, 4, 'images/blogs/b5.png', 'Help Clear The Shelter at RSPCA', 'At Love That Pet, were big supporters of rescue animals.\r\n\r\nFebruary 26, 2016\r\nMany of our pounds are full of wonderful purebred or mixed breed dogs and cats of all shapes and sizes. Most have simply been abandoned through no fault of their own because their family situation has changed.\r\n\r\nRSPCA NSW desperately wants to find forever homes for every single one of their shelter animals. But to do this, they need your help. That is why they have launched operation Clear The Shelter.\r\n\r\nFor four days in February, adopting a pet costs just 29 dollars, whatever the animalâ€™s age, size or species.\r\n\r\nThere is no better time to find your new furry best friend!\r\n\r\nWHAT: Discount adoption rates\r\nWHEN: 26-29 February 2016\r\nWHERE: All RSPCA NSW shelters and Care Centers\r\n\r\nNot based in NSW but would still like to adopt a furry friend? Contact your local RSPCA:\r\n\r\nRSPCA ACT\r\n\r\nRSPCA Victoria\r\n\r\nRSPCA Queensland\r\n\r\nRSPCA South Australia\r\n\r\nRSPCA Western Australia\r\n\r\nRSPCA Tasmania\r\n\r\nRSPCA Darwin', '2016-04-05', 'Approve'),
(12, 4, 'images/blogs/b6.png', 'How to Keep your Dog Cool this Summer', 'The weather has been pretty warm lately and our furry friends are noticing it, too. It is probably a good time to be thinking about ways we can help keep our pets cool.\r\n\r\nJanuary 16, 2015\r\nDogs are more susceptible to heat stress than humans as they cannot sweat and often have coats that are not suited to warmer climates particularly double-coated arctic breeds.\r\n\r\nStaffys and dogs with snub noses are also inclined to overheat and then develop breathing difficulties, which is often compounded by a desire to obsessively fetch that ball until the point of collapse!\r\n\r\nSo we have put together a few tips to keep your dog cool this summer.\r\n\r\nProvide a shallow pool, like those clam shell sandpit creations that kids use. The quickest way for your dog to cool down is by standing or lying in some water.\r\nProvide multiple stainless steel water bowls in shady areas rather than plastic bowls and change at least once daily.\r\nUse an elevated dog bed such as a trampoline bed.\r\nProvide a fan one that cannot be knocked over, and with a cord that is protected from chewing if your dog is so inclined!.\r\n\r\nAvoid walks during 10 to 4pm, on really hot days walk at dawn and dusk.\r\nNever leave your dog in the car, even for 5 minutes, the temperature inside a car can increase rapidly to fatal temperatures.\r\nFreeze some 2L water bottles, wrap them in a tea towel and place them near pet resting areas.\r\nMake some popsicles you can use many food items such as salt reduced onion free stock, dog food or peanut butter and freeze in anything from an old ice cream container to a muffin tin.\r\nUse a sprinkler on a timer to come on in the middle of the day.\r\nHang some wet towels to create a simple air conditioner.\r\nAllow your dog to dig a hole to lie in if the garden can stand it.\r\nEnjoy the summer! We hope these tips will keep your dog cool over those long summer days.', '2016-04-05', 'Approve'),
(13, 4, 'images/blogs/b7.png', 'Leash Holding, Could it Really be Dangerous?', 'There is a right way and several wrong ways to hold your dog s leash. Avoid injuries to you and your dog and do it safely by following these tips.\r\n\r\nJune 8, 2015\r\n\r\nHolding your dog s leash seems like such a basic thing, but it could mean the difference between safety and some pretty awful injuries.\r\n\r\nI know, right now youre probably thinking something along the lines of, this person is insane, how could holding a lead be dangerous?!. Many of us do not  even THINK about how we hold our dog s lead, we just do whatever is comfortable.\r\n\r\nTwo years ago I got my first dog and on my first day of puppy class the trainer spent more time talking about how to safely hold the lead than he did telling me about how to get my dog to sit. What he wanted us to leave with is the message that no matter how big or small our dog is, we were NEVER to wrap the lead around our arm, our wrist, or around any part of our body in general. He then recounted stories of owners being dragged by their dogs, breaking arms, de-gloving their fingers and even his own experience of a dislocated thumb.\r\n\r\nI honestly thought the guy was having me on. I mean, Id always wrapped the lead around my arm when walking the family dog. After all, I needed to make sure I had a firm hold on a dog that weighed about 25kg!\r\n\r\nThen, a few weeks later, I was walking my own 8kg dog with the lead wrapped around my wrist when he saw something interesting and took off. I wasnt expecting it and the lead was still ripped from what I thought was a firm grasp. I also felt this horrible pain in my thumb almost had it pulled out of its socket and a nice piece of rope burn down the back of my hand.\r\n\r\nSo I went back to the trainer, admitted that I didnt listen to him and asked to be shown a safer way to hold my dogs lead. He told me the best way to hold your dogs lead is to put only your thumb through the loop on the lead and hold as demonstrated in the photo below. If you need extra support, also hold the lead with your other hand.\r\n\r\nTo hold a lead place your thumb through the loop, then close your hand over the handle.\r\nTo hold a lead place your thumb through the loop, then close your hand over the handle.\r\nI recently spoke to a rather unfortunate dog ownerâ€¦ she used to walk her large breed dog with the lead wrapped around her arm because he pulled like crazy and she was scared he would escape her grip. Then one day she tripped, spooked her dog and he took off. Now, because that lead was wrapped around her arm, she was pulled over and dragged along. Apart from some nasty cuts, bumps and bruises, she walked away with not one, but TWO broken arms! She was sharing her story to hopefully save at least one other owner from an unfortunate fate.\r\n\r\nIf you do have a dog that pulls, work on teaching him to heel. Or take a shortcut and use a head halter instead, these brilliant inventions can really help you take the lead again pun intended!', '2016-04-05', 'Approve'),
(14, 4, 'images/blogs/b8.png', 'Like Fancy Pet Gadgets? We Love the Healing Powers', 'K Laser enhances natural healing and is wonderful for osteoarthritis and chronic wounds. It is particularly great for pets since it is completely pain free.\r\n\r\nJuly 24, 2015\r\nYou may have heard rumors about laser therapy for pets and wondered exactly what it is. Klaser is one of the things that really sets our Love That Pet Wellness Campuses apart from the crowd. There are very few vet clinics in Sydney that offer Klaser therapy.\r\n\r\nKlaser is incredibly safe and effective for a number of health conditions. It speeds up healing, reduces pain and inflammation and is completely pain free. If you put the laser on your own skin it just feels slightly warm barely noticeable for most settings, so it is great for anxious pets that would not necessarily tolerate acupuncture or physiotherapy.\r\n\r\nIt is particularly wonderful for pets with chronic pain conditions like sore backs and osteoarthritis. We have also seen some spectacular results with frustrating non-healing wounds and we offer it as an adjunct to any surgery to enhance healing.\r\n\r\nLaser therapy for pets is ideal for:\r\n\r\nWound healing\r\nArthritis\r\nPain management\r\nInjuries such as sore knees and hips, particularly cruciate ligament tears and hip dysplasia\r\nIf you think your pet would benefit from some cutting edge technology to help those aches and pains, we have several discounted packages for K-laser. Our basic package is 5 treatments for only $199! Most pets do well with around 5 sessions usually at weekly intervals. Book in to see one of the vets today at either our Darlinghurst or North Ryde campuses and we can show you how it works.', '2016-04-05', 'Approve'),
(15, 4, 'images/blogs/b9.png', 'Normanhurst Vet Practice Joins Love That Pet', 'At Love That Pet our mission is to improve and extend the life of every pet we touch.\r\n\r\nFebruary 24, 2016\r\n\r\nLove That Pet is committed to providing pet owners with a complete lifestyle solution that combines veterinary, pet care and online services to improve and extend the life of every pet.\r\n\r\nWHAT DOES THIS MEAN FOR YOU AND YOUR PET?\r\n\r\nYou will continue to receive the same Amazing Care from our dedicated veterinary, nursing and customer experience teams. Dr Matt will continue to lead the team as Love That Pet Normanhurstâ€™s Clinical Lead Vet.\r\nYou will be able to access Astounding Value pet supplies via the Love That Pet online store and within each practice.\r\nNew systems, services, technology and innovations will be rolled out in the coming months to deliver a truly Awesome Service that improves the lives of both you and your pet\r\nEXCITING CHANGES YOU WILL NOTICE IN THE NEXT FEW WEEKS\r\n\r\nA refresh and upgrade of the practice as we transition to the Love That Pet brand\r\nStandard pricing for all pet care products regardless of whether you order in person or online, bringing you exceptional savings and convenience for all your pet care needs\r\nThe option to have your pets food/supplies delivered straight to your door\r\nThe team at Normanhurst Vet would like to extend a very big Thank You for letting us be a part of your pets lives and we are looking forward to continuing the adventure with you as Love That Pet!', '2016-04-05', 'Approve'),
(16, 2, 'images/blogs/b10.png', 'Should you feed your Pet a Grain Free Diet?', 'Grain free, hypoallergenic pet diets are becoming increasingly popular. Dr Eloise Bright discusses whether cats and dogs are allergic to grain, what causes food allergies, and whether you should buy your pet a grain free food.\r\n\r\nMarch 16, 2016\r\n\r\nThe way our own bodies digest food is very different from cats and dogs.\r\n\r\nOur pets stomachs are designed to eat some pretty disgusting things  like possum poo!\r\n\r\nDogs and cats have a very short transit time from eating to evacuation (less than 24 hours and as short as 6 hours), while for humans this can be up to 5 days, allowing for the digestion of more complex materials. That means dogs and cats lack the ability to process grains as efficiently as humans, so they need these in a form they can manage.\r\n\r\nCats are pure carnivores so need a high protein diet from animal sources.\r\n\r\nDogs are technically omnivores, and over time have developed the ability to process starch and foods that their wolf ancestor could not.\r\n\r\nAre cats and dogs allergic to grains?\r\n\r\nThere are lots of different types of grains. Some include gluten, such as barley, rye, wheat and oats. Others are gluten free, like corn, sorghum and quinoa.\r\n\r\nThere is currently no definitive evidence to suggest that grain causes allergies in dogs or cats. Some pets may develop skin allergies due to corn, but the most common food allergies in pets are to beef, dairy, chicken and lamb, rather than grains.\r\n\r\nHow do I know if my pet has a food allergy?\r\n\r\nFood allergies may cause diarrhea, vomiting or weight loss, but also often show up in the skin. So if your dog licks his feet, gets frequent ear infections or an itchy bottom, the culprit could be a food protein like beef. Cats often develop itching around the head with their food allergies.\r\n\r\nThe only way to diagnose a food allergy is by doing a food trial. We recommend chatting to your vet about how to do this properly so you dont waste time and money on a food that wonâ€™t help.\r\n\r\nYou will need to feed a novel or new protein like venison, lamb or kangaroo with a carbohydrate source like sweet potato. Or you could use a diet designed for food allergies like Royal Canin Hypoallergenic or Hills Science Diet Z/D.\r\n\r\nSo should I try grain free?\r\n\r\nCertainly there is no harm in feeding your pet a grain free diet. However more importantly, you should be feeding your pet a good quality, well known brand that you know has excellent safety records. So avoid those cheap supermarket foods and buy as good a quality as you can afford. But consult with your vet if you have any concerns with your pets digestive system or skin so we can help you get to the bottom of the problem.', '2016-04-05', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `CommentID` int(11) NOT NULL,
  `BlogID` int(11) NOT NULL,
  `User` varchar(20) NOT NULL,
  `Comment` varchar(500) NOT NULL,
  `DateAdded` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`CommentID`, `BlogID`, `User`, `Comment`, `DateAdded`, `Status`) VALUES
(9, 1, 'Kristel', 'brilliante', '2016-03-24', 'Approve'),
(10, 1, 'Ivy Dela Merced', 'This site is the best when it comes to showcasing pets and selling them online. Love it!', '2016-03-24', 'Approve'),
(12, 2, 'Joseph', 'Thank you for keeping us updated!', '2016-03-24', 'Approve'),
(15, 1, 'adaada', 'ad', '2016-03-31', 'Pending'),
(16, 1, 'adsad', 'sdsd', '2016-04-01', 'Pending'),
(17, 1, 'sd', 'sds', '2016-04-02', 'Pending'),
(18, 1, 'ivy', 'Very cool and nice', '2016-04-05', 'Pending'),
(19, 7, '@rocks', 'Awesome it helps me a lot', '2016-04-07', 'Pending'),
(20, 7, '@ruby', 'This is quite serious', '2016-04-07', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `DeliveryNo` int(11) NOT NULL,
  `OrderNo` int(11) NOT NULL,
  `DateDelivered` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`DeliveryNo`, `OrderNo`, `DateDelivered`, `Status`) VALUES
(1, 1, '2016-09-09', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `RefNo` int(11) NOT NULL,
  `OrderNo` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `PetID` int(11) NOT NULL,
  `SuppliesID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Amount` double NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`RefNo`, `OrderNo`, `UserID`, `PetID`, `SuppliesID`, `Quantity`, `Amount`, `Status`) VALUES
(213, 1, 2, 1, 0, 1, 122, 'InCart'),
(214, 1, 945, 1, 0, 1, 122, 'Processing'),
(215, 1, 945, 2, 0, 1, 120, 'Processing');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderNo` int(11) NOT NULL,
  `DateOrdered` datetime NOT NULL,
  `PaymentMethod` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderNo`, `DateOrdered`, `PaymentMethod`, `Status`) VALUES
(1, '2016-08-26 05:35:20', 'Through Paypal', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `PetID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `Breed` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  `Available` int(11) NOT NULL,
  `PetBirthdate` date NOT NULL,
  `Description` varchar(200) NOT NULL,
  `StatusID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `PetName` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Reason` varchar(500) NOT NULL,
  `DateSold` date NOT NULL,
  `Image` varchar(400) NOT NULL,
  `Image2` varchar(400) NOT NULL,
  `Image3` varchar(400) NOT NULL,
  `IsFeatured` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`PetID`, `CategoryID`, `Breed`, `Price`, `Available`, `PetBirthdate`, `Description`, `StatusID`, `UserID`, `PetName`, `Quantity`, `Reason`, `DateSold`, `Image`, `Image2`, `Image3`, `IsFeatured`) VALUES
(1, 1, 'Doberman Pinscher', 122, 2, '2015-12-10', 'sddgf', 1, 4, 'Dobby', 2, 'aa', '2016-03-27', 'images/Pets/Dogs/doberman-pinscher.jpg', 'images/Pets/Dogs/doberman-pinscher2.jpg', 'images/Pets/Dogs/doberman-pinscher.jpg', 'Yes'),
(2, 4, 'Humming Bird', 120, 3, '2016-02-06', 'Nice Voice', 1, 5, 'Indy', 3, 'Loud and Did never stop to sing', '2016-04-05', 'images/Pets/Birds/Hummingbird1.jpg', 'images/Pets/Birds/Hummingbird.jpg', 'images/Pets/Birds/Hummingbird2.jpg', 'YES'),
(3, 4, 'Cockatoo', 110, 2, '2016-02-06', 'Cute', 1, 5, 'Shygo', 3, 'Sometimes this pet is hiding himself', '2016-04-05', 'images/Pets/Birds/cockatoo.jpg', 'images/Pets/Birds/cockatoo1.jpg', 'images/Pets/Birds/cockatoo2.jpg', 'YES'),
(4, 4, 'Crane', 130, 4, '2016-02-06', 'Tall', 1, 5, 'Shuma', 3, 'Very Tall', '2016-04-05', 'images/Pets/Birds/crane.jpg', 'images/Pets/Birds/crane1.jpg', 'images/Pets/Birds/crane2.jpg', 'YES'),
(5, 5, 'American Paint', 1890, 20, '2016-02-06', 'Faster than what you think', 1, 100, 'Joey', 3, 'Horse Racer', '2016-04-05', 'images/Pets/Horses/americanpaint.jpg', 'images/Pets/Horses/am1.jpg', 'images/Pets/Horses/am2.jpg', 'YES'),
(6, 4, 'Finch', 90, 10, '2016-02-06', 'He is sad without a friend', 1, 5, 'Curooh', 3, 'He is friendly', '2016-04-05', 'images/Pets/Birds/finch.jpg', 'images/Pets/Birds/finch1.jpg', 'images/Pets/Birds/finch2.jpg', 'YES'),
(7, 5, 'Andalusian', 1990, 20, '2016-02-06', 'A sweet horse', 1, 100, 'chiney', 3, 'You can share your thoughts with chiney', '2016-04-05', 'images/Pets/Horses/andalusian.jpg', 'images/Pets/Horses/anda1.jpg', 'images/Pets/Horses/anda2.jpg', 'YES'),
(8, 5, 'Belgian', 1650, 20, '2016-02-06', 'A soft hair ', 1, 100, 'sofie', 3, 'Be with sofie and feel her softness', '2016-04-05', 'images/Pets/Horses/belgian.jpg', 'images/Pets/Horses/belgian1.jpg', 'images/Pets/Horses/belgian2.jpg', 'YES'),
(9, 5, 'Racking', 2410, 20, '2016-02-06', 'He loves to walk and walk ', 1, 100, 'Rocco', 3, 'Tour yourself with Rocco', '2016-04-05', 'images/Pets/Horses/racking.jpg', 'images/Pets/Horses/racking1.jpg', 'images/Pets/Horses/racking2.jpg', 'YES'),
(10, 1, 'Bulldog', 3231, 3, '2015-09-11', 'fsfsf', 1, 100, 'Bully', 2, '', '2016-03-18', 'images/Pets/Dogs/bulldog.jpg', 'images/Pets/Dogs/bulldog2.jpg', 'images/Pets/Dogs/bulldog.jpg', 'Yes'),
(11, 9, 'Cahmeleon', 199, 20, '2016-02-06', 'Loves to be attach on something', 1, 100, 'Caymie', 3, 'To be a decoration to your home', '2016-04-05', 'images/Pets/Reptiles/chameleon.jpg', 'images/Pets/Reptiles/cham1.jpg', 'images/Pets/Reptiles/cham2.jpg', 'YES'),
(12, 1, 'Shith-Tzu', 693, 2, '2015-09-11', 'fsfsf', 1, 8, 'Joseph', 0, '', '2016-03-18', 'images/Pets/Dogs/shith-tzu3.jpg', 'images/Pets/Dogs/shith-tzu.jpg', 'images/Pets/Dogs/shith-tzu3.jpg', 'Yes'),
(13, 1, 'Burnese-Mountain', 100, 1, '2015-09-11', 'fsfsf', 1, 8, 'Marvin', 0, '', '2016-03-18', 'images/Pets/Dogs/bernese-mountain.jpg', 'images/Pets/Dogs/bernese-mountain2.jpg', 'images/Pets/Dogs/bernese-mountain.jpg', 'Yes'),
(14, 9, 'Geckos', 159, 20, '2016-02-06', 'Color Switch', 1, 100, 'Gizmo', 3, 'Can be an entertainment', '2016-04-05', 'images/Pets/Reptiles/geckos.jpg', '', '', 'YES'),
(15, 9, 'Lizard', 159, 20, '2016-02-06', 'A different kind of lizard', 1, 100, 'Laizan', 3, 'Enjoy looking and observing the unique attitude of Laizan', '2016-04-05', 'images/Pets/Reptiles/Lizard.jpg', '', '', 'YES'),
(16, 9, 'Skink', 159, 20, '2016-02-06', 'Faster to move', 1, 100, 'Fainy', 3, 'Find where he hides', '2016-04-05', 'images/Pets/Reptiles/skink.jpg', 'images/Pets/Reptiles/skink1.jpg', 'images/Pets/Reptiles/skink2.jpg', 'NO'),
(17, 2, 'Persian cat', 0, 1, '1997-07-19', 'Trip lang', 2, 9, 'Kristel', 0, '', '2016-03-18', 'images/Pets/british-shorthair.jpg', '', '', 'NO'),
(18, 1, 'German Sheperd', 1520, 10, '2016-02-06', 'Your Security', 1, 5, 'Max', 3, 'Max will fight for you', '2016-04-05', 'images/Pets/Dogs/german1.jpg', 'images/Pets/Dogs/german2.jpg', 'images/Pets/Dogs/german3.jpg', 'NO'),
(19, 1, 'Labrador', 1260, 10, '2016-02-06', 'Love your door', 1, 5, 'Duke', 3, 'He can be a guard at your door', '2016-04-05', 'images/Pets/Dogs/labrador.jpg', '', '', 'Yes'),
(20, 1, 'Chow Chow', 690, 10, '2016-02-06', 'This can be your teddy bear', 1, 5, 'Buddy', 3, 'To make you feel awesome', '2016-04-05', 'images/Pets/Dogs/chow1.jpg', '', '', 'Yes'),
(21, 2, 'Sphynx', 0, 1, '1997-02-01', 'cute', 2, 10, 'Jonathan', 0, 'trip lang', '2016-03-20', 'images/Pets/Cats/sphynx2.jpg', '', '', 'Yes'),
(22, 1, 'Shith-tzu', 122, 1, '0000-00-00', 'aaaaaaaaaa', 1, 100, 'Krissy', 1, 'aaaaaaaaa', '0000-00-00', 'images/Pets/Dogs/shith-tzu.jpg', 'images/Pets/shith-tzu.jpg', 'images/Pets/shith3.jpg', 'YES'),
(23, 1, 'Pomeranian', 1420, 10, '2016-02-06', 'Shes always hyper and love to play', 1, 5, 'Zoey', 3, 'Your toy doggie', '2016-04-05', 'images/Pets/Dogs/pomeranian.jpg', '', '', 'YES'),
(24, 1, 'Poodle', 989, 10, '2016-02-06', 'A jolly pet', 1, 5, 'Heide', 3, 'Be jolly with this pet', '2016-04-05', 'images/Pets/Dogs/poodle.jpg', '', '', 'YES'),
(25, 3, 'Asian Arowana', 460, 2, '2016-02-06', 'She loves to turn around while eating', 1, 100, 'Lexi', 3, 'So that you will enjoy watching this pet dancing', '2016-04-05', 'images/Pets/Fish/asianarowana.jpg', '', '', 'YES'),
(26, 3, 'Giant Travelli', 599, 20, '2016-02-06', 'A friendly fish', 1, 100, 'Boomeru', 3, 'To have a friendly pet that will unite all of your fish pet', '2016-04-05', 'images/Pets/Fish/gianttravelli.jpg', '', '', 'YES'),
(27, 3, 'Guppy', 465, 20, '2016-02-06', 'The lightning tail', 1, 100, 'Dixie', 3, 'To have a colorful lights in the aquarium', '2016-04-05', 'images/Pets/Fish/guppy.jpg', '', '', 'NO'),
(28, 3, 'Neon Tetra', 465, 20, '2016-02-06', 'The Neon Color', 1, 100, 'nanie', 3, 'For you to enjoy the value of neon', '2016-04-05', 'images/Pets/Fish/neontetra.jpg', '', '', 'YES'),
(29, 3, 'Siasamese', 560, 20, '2016-02-06', 'Sometimes it looks like a shell but this is a fish', 1, 100, 'shelby', 3, 'The tranformation look', '2016-04-05', 'images/Pets/Fish/siasamese.jpg', '', '', 'NO'),
(30, 5, 'Shire', 2815, 20, '2016-02-06', 'Very Tall and Fast to run', 1, 100, 'Gus', 3, 'Be with Gus', '2016-04-05', 'images/Pets/Fish/gt1.jpg', '', '', 'NO'),
(31, 9, 'Turtle', 260, 20, '2016-02-06', 'A swimmer and a lazy turtle', 1, 100, 'Alvien', 3, 'Look at his moves', '2016-04-05', 'images/Pets/Fish/gt2.jpg', '', '', 'NO'),
(32, 6, 'Jelly Fish', 190, 10, '2016-02-06', 'Like a thunder lights', 1, 5, 'Lihgtie', 3, 'Cool', '2016-04-05', 'images/Pets/Invertebrates/jellyfish.jpg', '', '', 'NO'),
(33, 6, 'Scallop', 120, 10, '2016-02-06', 'Pearl Hidden inside of it', 1, 5, 'Indie', 3, 'Beauty Revealed after you saw inside', '2016-04-05', 'images/Pets/Invertebrates/scallop1.jpg', '', '', 'NO'),
(34, 6, 'Snail', 70, 100, '2016-02-06', 'Not that fast to move', 1, 5, 'Swoie', 3, 'A snail in control', '2016-04-05', 'images/Pets/Invertebrates/snail.jpg', '', '', 'YES'),
(35, 6, 'Sponge', 99, 100, '2016-02-06', 'Can color the home of Sea Pets', 1, 5, 'Chloe', 3, 'To design your aquarium much better', '2016-04-05', 'images/Pets/Invertebrates/sponge.jpg', '', '', 'YES'),
(36, 6, 'Star Fish', 119, 100, '2016-02-06', 'It always moving you just never see it', 1, 5, 'Settie', 3, 'For you to experience having an exciting pet star fish', '2016-04-05', 'images/Pets/Invertebrates/starfish.jpg', '', '', 'YES'),
(37, 7, 'Chicken', 140, 100, '2016-02-06', 'Multiply its inheritance', 1, 5, 'Meynie', 3, '', '2016-04-05', 'images/Pets/Poultry/chicken.jpg', '', '', 'YES'),
(38, 7, 'Duck', 160, 100, '2016-02-06', '', 1, 5, 'Dick', 3, '', '2016-04-05', 'images/Pets/Poultry/duck.jpg', '', '', 'YES'),
(39, 7, 'Goose', 189, 100, '2016-02-06', '', 1, 5, 'Gonie', 3, '', '2016-04-05', 'images/Pets/Poultry/goose.jpg', '', '', 'YES'),
(40, 7, 'Pheasant', 200, 100, '2016-02-06', '', 1, 5, 'Phiel', 3, '', '2016-04-05', 'images/Pets/Poultry/pheasant.jpeg', '', '', 'YES'),
(41, 7, 'Turkey', 259, 100, '2016-02-06', '', 1, 5, 'Tinky', 3, '', '2016-04-05', 'images/Pets/Poultry/turkey.jpg', '', '', 'YES'),
(42, 8, 'Arnami', 129, 100, '2016-02-06', '', 1, 5, 'Arien', 3, '', '2016-04-05', 'images/Pets/Rabbits/arnami.jpg', '', '', 'YES'),
(43, 8, 'Brush', 134, 100, '2016-02-06', '', 1, 5, 'Binky', 3, '', '2016-04-05', 'images/Pets/Rabbits/brush.jpg', '', '', 'YES'),
(44, 8, 'Mountain Cotton Tail', 145, 100, '2016-02-06', '', 1, 5, 'Bitchie', 3, '', '2016-04-05', 'images/Pets/Rabbits/mountaincottontail.jpg', '', '', 'YES'),
(45, 8, 'Pygmy', 169, 100, '2016-02-06', '', 1, 5, 'Bunky', 3, '', '2016-04-05', 'images/Pets/Rabbits/pygmy.jpg', '', '', 'YES'),
(46, 8, 'tapeti', 99, 100, '2016-02-06', '', 1, 5, 'Sheyie', 3, '', '2016-04-05', 'images/Pets/Rabbits/tapeti.jpg', '', '', 'YES'),
(47, 10, 'Chinchilla', 99, 100, '2016-02-06', '', 1, 5, 'Caty', 3, '', '2016-04-05', 'images/Pets/Rodents/chinchilla.jpg', '', '', 'YES'),
(48, 10, 'Door mouse', 89, 100, '2016-02-06', '', 1, 5, 'Mounie', 3, '', '2016-04-05', 'images/Pets/Rodents/doormouse.jpg', '', '', 'YES'),
(49, 10, 'Gerbil', 79, 100, '2016-02-06', '', 1, 5, 'Beri', 3, '', '2016-04-05', 'images/Pets/Rodents/gerbil.jpg', '', '', 'YES'),
(50, 10, 'Hamster', 79, 100, '2016-02-06', '', 1, 5, 'Heimie', 3, '', '2016-04-05', 'images/Pets/Rodents/hamster.jpg', '', '', 'YES'),
(51, 10, 'Mouse', 59, 100, '2016-02-06', '', 1, 5, 'Miniie', 3, '', '2016-04-05', 'images/Pets/Rodents/mouse.jpg', '', '', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `petcategory`
--

CREATE TABLE `petcategory` (
  `CategoryID` int(11) NOT NULL,
  `Category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petcategory`
--

INSERT INTO `petcategory` (`CategoryID`, `Category`) VALUES
(1, 'Dogs'),
(2, 'Cats'),
(3, 'Fish'),
(4, 'Birds'),
(5, 'Horses'),
(6, 'Invertebrates'),
(7, 'Poultry'),
(8, 'Rabbits'),
(9, 'Reptiles'),
(10, 'Rodents');

-- --------------------------------------------------------

--
-- Table structure for table `petstatus`
--

CREATE TABLE `petstatus` (
  `StatusID` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petstatus`
--

INSERT INTO `petstatus` (`StatusID`, `Status`) VALUES
(1, 'FOR SALE'),
(2, 'FOR ADOPTION');

-- --------------------------------------------------------

--
-- Table structure for table `petsupplies`
--

CREATE TABLE `petsupplies` (
  `SuppliesID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ProductName` varchar(30) NOT NULL,
  `SuppliesCat` varchar(30) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Price` double(30,2) NOT NULL,
  `Available` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Image` varchar(400) NOT NULL,
  `Image2` varchar(400) NOT NULL,
  `Image3` varchar(400) NOT NULL,
  `IsFeatured` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petsupplies`
--

INSERT INTO `petsupplies` (`SuppliesID`, `CategoryID`, `ProductName`, `SuppliesCat`, `Brand`, `Price`, `Available`, `Description`, `Image`, `Image2`, `Image3`, `IsFeatured`) VALUES
(1, 1, 'House', '', '', 6430.00, 0, 'nnnnnnnn', 'images/OtherProducts/house1.jpeg', '', '', 'Yes'),
(2, 1, 'Bones', '', '', 2060.00, 0, 'nnnnnnnn', 'images/OtherProducts/dog2.jpeg', '', '', 'Yes'),
(3, 1, 'Treats', '', '', 200.00, 0, 'nnnnnnnn', 'images/OtherProducts/dog1.jpeg', '', '', 'Yes'),
(4, 1, 'Collar', '', '', 2700.00, 0, 'nnnnnnnn', 'images/OtherProducts/collar.jpeg', '', '', 'Yes'),
(5, 4, 'Cage Toy', '4', 'Petlane', 256.00, 20, 'Have more fun with the toys', 'images/OtherProducts/Birds/birdcagetoys.jpg', '', '', 'YES'),
(6, 4, 'Bird House', '4', 'Petlane', 590.00, 20, ' Comfortable house for your Bird', 'images/OtherProducts/Birds/birdhouse.jpg', '', '', 'YES'),
(7, 4, 'Bird Plate', '4', 'Petlane', 420.00, 20, 'Relaxed Plate', 'images/OtherProducts/Birds/birdplate.jpg', '', '', 'YES'),
(8, 4, 'Bird Toy', '4', 'Petlane', 260.00, 20, 'Fun', 'images/OtherProducts/Birds/birdtoy.jpg', '', '', 'YES'),
(9, 2, 'Bed', '5', 'Petlane', 730.00, 20, 'luxury bed', 'images/OtherProducts/Cats/catbed.png', '', '', 'YES'),
(10, 2, 'Collar', '5', 'Petlane', 180.00, 20, 'You can easily determine your pet', 'images/OtherProducts/Cats/catcollar2.jpg', '', '', 'YES'),
(11, 2, 'Collar', '5', 'Petlane', 180.00, 20, 'More designs for you', 'images/OtherProducts/Cats/catcollar2.png', '', '', 'YES'),
(12, 2, 'Harness', '5', 'Petlane', 310.00, 20, 'Calm Harness for your cat', 'images/OtherProducts/Cats/catharness.jpg', '', '', 'YES'),
(14, 2, 'Scratcher', '5', 'Petlane', 190.00, 20, 'Help your cat to be more flexible', 'images/OtherProducts/Cats/catscratcher.jpg', '', '', 'Yes'),
(15, 2, 'Pet Tag', '5', 'Petlane', 220.00, 20, 'Tag your cat', 'images/OtherProducts/Cats/cattag.jpg', '', '', 'NO'),
(16, 1, 'Bark Control', '7', 'Petlane', 990.00, 20, 'TO control loud barks of your dog', 'images/OtherProducts/Dogs/petcontrol.jpg', '', '', 'NO'),
(17, 1, 'Bed', '7', 'Petlane', 1520.00, 20, 'Feel ease', 'images/OtherProducts/Dogs/dogbed.jpg', '', '', 'NO'),
(18, 1, 'House', '7', 'Petlane', 1860.00, 20, 'For Security and Safety', 'images/OtherProducts/Dogs/doghouse.jpg', '', '', 'NO'),
(19, 1, 'Remote training', '7', 'Petlane', 1560.00, 20, 'Train carefully', 'images/OtherProducts/Dogs/dogremote.jpg', '', '', 'YES'),
(20, 1, 'Tags', '7', 'Petlane', 150.00, 20, 'Know your dog', 'images/OtherProducts/Dogs/dogtag.jpg', '', '', 'NO'),
(22, 3, 'Aquarium', '', 'Petlane', 256.00, 20, 'Cool Aquarium', 'images/OtherProducts/Fish/aquarium.png', '', '', 'YES'),
(23, 3, 'Coral Decoration', '', 'Petlane', 325.00, 20, 'Decorate your Aquarium', 'images/OtherProducts/Fish/coraldecor.png', '', '', 'YES'),
(24, 3, 'Gravel Plain', '', 'Petlane', 250.00, 20, 'Make your fish feel like, its the real ocean', 'images/OtherProducts/Fish/gravel.png', '', '', 'YES'),
(25, 3, 'Gravel Colored', '', 'Petlane', 390.00, 20, 'Big stones for hiing', 'images/OtherProducts/Fish/gravel2.png', '', '', 'YES'),
(26, 3, 'Ornament', '', 'Petlane', 250.00, 20, 'A roof for fish', 'images/OtherProducts/Fish/ornament.png', '', '', 'YES'),
(27, 3, 'Ornament Tower', '', 'Petlane', 360.00, 20, 'A tower ornament', 'images/OtherProducts/Fish/ornament2.png', '', '', 'YES'),
(28, 3, 'Tank Cleaner', '', 'Petlane', 140.00, 20, 'For a cleaner tank', 'images/OtherProducts/Fish/tankcleaner.png', '', '', 'YES'),
(29, 5, 'Blanket', '5', 'Petlane', 862.00, 20, 'Comfortable Blanket for your horse', 'images/OtherProducts/Horses/blanket.png', '', '', 'YES'),
(30, 5, 'Joint Coat', '5', 'Petlane', 472.00, 20, 'Protect joints', 'images/OtherProducts/Horses/jointcoat.png', '', '', 'YES'),
(31, 5, 'Latigo', '5', 'Petlane', 182.00, 20, 'Cotrol', 'images/OtherProducts/Horses/latigo.png', '', '', 'YES'),
(32, 5, 'Spur Strap', '5', 'Petlane', 143.00, 20, 'Strap', 'images/OtherProducts/Horses/spurstrap.png', '', '', 'YES'),
(33, 5, 'Plain Strap', '5', 'Petlane', 143.00, 20, 'Strap', 'images/OtherProducts/Horses/straps.png', '', '', 'YES'),
(35, 7, 'Cleaner', '4', 'Petlane', 69.00, 20, '', 'images/OtherProducts/Poultry/cleaner.png', '', '', 'YES'),
(36, 9, 'Cage', '4', 'Petlane', 320.00, 20, 'A safer Cage', 'images/OtherProducts/Reptiles/cage.png', '', '', 'YES'),
(37, 9, 'House', '4', 'Petlane', 399.00, 20, 'A real home for your reptile pet', 'images/OtherProducts/Reptiles/house.png', '', '', 'YES'),
(38, 9, 'Scoop', '4', 'Petlane', 89.00, 20, 'A scoop for dust and poop', 'images/OtherProducts/Reptiles/scoop.png', '', '', 'YES'),
(39, 9, 'Water Conditioner', '4', 'Petlane', 89.00, 20, '', 'images/OtherProducts/Reptiles/waterconditioner.png', '', '', 'YES'),
(40, 7, 'Cleaner Brush', '4', 'Petlane', 69.00, 20, '', 'images/OtherProducts/Poultry/cleaner2.png', '', '', 'YES'),
(41, 7, 'Light', '4', 'Petlane', 79.00, 20, '', 'images/OtherProducts/Poultry/light.png', '', '', 'YES'),
(42, 7, 'Nest', '4', 'Petlane', 15.00, 20, '', 'images/OtherProducts/Poultry/nest.png', '', '', 'YES'),
(43, 7, 'Plate', '4', 'Petlane', 10.00, 20, '', 'images/OtherProducts/Poultry/plate.png', '', '', 'YES'),
(44, 8, 'Cage', '4', 'Petlane', 10.00, 20, '', 'images/OtherProducts/Rabbits/cage.png', '', '', 'YES'),
(45, 8, 'House', '4', 'Petlane', 10.00, 20, '', 'images/OtherProducts/Rabbits/house.png', '', '', 'YES'),
(47, 8, 'Harness', '4', 'Petlane', 59.00, 20, '', 'images/OtherProducts/Rabbits/harness.png', '', '', 'YES'),
(48, 8, 'Toy', '4', 'Petlane', 15.00, 20, '', 'images/OtherProducts/Rabbits/toy.png', '', '', 'YES'),
(49, 8, 'Trays', '4', 'Petlane', 15.00, 20, '', 'images/OtherProducts/Rabbits/trays.png', '', '', 'YES'),
(50, 10, 'Light', '4', 'Petlane', 15.00, 20, '', 'images/OtherProducts/Rodents/light.png', '', '', 'YES'),
(51, 10, 'Drinking Bottle', '4', 'Petlane', 10.00, 20, '', 'images/OtherProducts/Rodents/bottle.png', '', '', 'YES'),
(52, 10, 'Fun Toy Gloo', '4', 'Petlane', 20.00, 20, '', 'images/OtherProducts/Rodents/gloo.png', '', '', 'YES'),
(53, 10, 'Harness', '4', 'Petlane', 15.00, 20, '', 'images/OtherProducts/Rodents/harness.png', '', '', 'YES'),
(54, 10, 'House', '4', 'Petlane', 59.00, 20, '', 'images/OtherProducts/Rodents/house.png', '', '', 'YES'),
(55, 10, 'Nature Feed Tree', '4', 'Petlane', 29.00, 20, '', 'images/OtherProducts/Rodents/naturefeed.png', '', '', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ReviewID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `PetID` int(11) NOT NULL,
  `SuppliesID` int(11) NOT NULL,
  `ReviewTitle` varchar(80) NOT NULL,
  `Review` varchar(200) NOT NULL,
  `DateAdded` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ReviewID`, `UserID`, `PetID`, `SuppliesID`, `ReviewTitle`, `Review`, `DateAdded`, `Status`) VALUES
(1, 1, 0, 2, 'Comment', 'wow', '2016-03-27', 'Approve'),
(2, 3, 0, 2, 'Comment', 'amazing', '2016-03-27', 'Approve'),
(3, 5, 10, 0, 'Try', 'nice', '2016-03-27', 'Disapprove'),
(4, 7, 10, 0, 'Comment', 'cool', '2016-03-27', 'Approve'),
(5, 5, 5, 5, 'Trying', 'This is impressive', '2016-03-04', 'Disapprove'),
(6, 5, 4, 4, 'Review', 'Just Checking the pets', '2016-03-04', 'Approve'),
(7, 7, 7, 7, 'Choosing', 'I better choose all of the pet that is available', '2016-03-04', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserListID` int(11) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  `AdditionalInfo` varchar(300) DEFAULT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserListID`, `LastName`, `FirstName`, `Address`, `ContactNo`, `Photo`, `AdditionalInfo`, `Status`) VALUES
(1, 1, 'Manalo', 'Joseph', 'Cavite', '111', 'images/Customers/joseph.jpg', '', ''),
(2, 2, 'Bautista', 'Jonathan', '114 Upper Banlat, Tandang Sora, QC', '09111111111', 'images/Customers/jonathan.jpg', 'as', 'Active'),
(3, 3, 'Dacuag', 'Marvin', 'Novaliches', '111', 'images/Customers/marvin.jpg', '', ''),
(4, 4, 'Delamerced', 'Ivy', 'Paranaque', '111', 'images/Customers/12935185_1109430989121652_91842785_n.jpg', '', ''),
(5, 5, 'Uy', 'Kristel', 'Taft Ave.', '111', 'images/Customers/kristel.jpg', 'sas', 'Active'),
(6, 6, 'Felipe', 'JP', 'Paco', '111', 'images/Customers/bp.png', 'trtu', 'Active'),
(7, 7, 'Samaniego', 'Kervin', 'Cavite', '111', 'images/Customers/bp.png', 'fg', 'Active'),
(8, 8, 'Liwanag', 'Reuel', 'Caloocan', '111', 'images/Customers/bp.png', '', ''),
(10, 10, 'Manalo', 'Joseph', '449 Niog', '09051484406', 'images/Customers/bp.png', 'nice', 'Active'),
(11, 11, 'Manalo', 'Joseph', '449 Niog Talaba', '09123', 'images/Customers/bp.png', '', ''),
(100, 100, 'PH', 'PetLane', '', '', 'images/Customers/bp.png', '', ''),
(101, 15, 'Bautista', 'Joy', 'aaaaa', '11111', 'images/Customers/bp.png', 'sdasd', 'Active'),
(943, 9, 'Suarez', 'Japheth', 'Marikina', '111', 'images/Customers/bp.png', 'dasf', 'Active'),
(944, 16, 'asd', 'asda', 'aasdas', 'asdfasf', 'images/Customers/bp.png', 'asas', 'Active'),
(945, 17, 'Bautista', 'Jonathan', '104 Upper Banlat, Tandang Sora', 'Jonathan Bautista', 'images/Customers/bp.png', ' ', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `UserListID` int(11) NOT NULL,
  `UserTypeID` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `DateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`UserListID`, `UserTypeID`, `Email`, `Username`, `Password`, `DateAdded`) VALUES
(1, 1, 'seph@benilde.edu.ph', 'seph', 'pass', '2016-03-16'),
(2, 3, 'athan@yahoo.com.ph', 'athan', 'pass', '0000-00-00'),
(3, 2, 'vin@benilde.edu.ph', 'vin', 'pass', '0000-00-00'),
(4, 3, 'ivy@benilde.edu.ph', 'ivy', 'pass', '0000-00-00'),
(5, 3, 'kristel@benilde.edu.ph', 'kristel', 'pass', '0000-00-00'),
(6, 3, 'jp@benilde.edu.ph', 'jp', 'pass', '0000-00-00'),
(7, 3, 'kervs@benilde.edu.ph', 'kervs', 'pass', '0000-00-00'),
(8, 3, 'reuel@benilde.edu.ph', 'ray', 'pass', '0000-00-00'),
(9, 3, 'japh@benilde.edu.ph', 'japh', 'pass', '0000-00-00'),
(10, 1, 'jo@benilde.edu.ph', 'jos', 'pass', '0000-00-00'),
(11, 3, 'seph@benilde.edu.ph', 'joseph', 'pass', '0000-00-00'),
(12, 2, 'legit@benilde.edu.ph', 'legit', 'pass', '0000-00-00'),
(13, 2, 'baut@benilde.edu.ph', 'baut', 'pass', '0000-00-00'),
(14, 2, 'maganda@benilde.edu.ph', 'maganda', 'pass', '0000-00-00'),
(15, 3, 'asasa@yahoo.com', 'joy', 'pass', '0000-00-00'),
(16, 3, 'aaa@ytsdgf.fd', 'aaa', 'aaa', '2016-04-09'),
(17, 3, 'j@outlook.com', 'athan', 'athan123', '2016-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `UserTypeID` int(11) NOT NULL,
  `UserType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`UserTypeID`, `UserType`) VALUES
(1, 'Administrator'),
(2, 'Veterinarian'),
(3, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `veterinarian`
--

CREATE TABLE `veterinarian` (
  `VeterinarianID` int(11) NOT NULL,
  `UserListID` int(11) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `Hospital` varchar(100) NOT NULL,
  `Degree` varchar(50) NOT NULL,
  `SchoolGraduated` varchar(100) NOT NULL,
  `Experience` int(11) NOT NULL,
  `BoardCertification` varchar(50) NOT NULL,
  `Awards` varchar(200) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  `AdditionalInfo` varchar(300) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `veterinarian`
--

INSERT INTO `veterinarian` (`VeterinarianID`, `UserListID`, `LastName`, `FirstName`, `Address`, `ContactNo`, `Hospital`, `Degree`, `SchoolGraduated`, `Experience`, `BoardCertification`, `Awards`, `Photo`, `AdditionalInfo`, `Status`) VALUES
(1, 12, 'Legit', 'Doc', 'Talaba men', '0999', 'UP Hospital', 'Master''s in Vet', 'Upian nang lata', 2, 'pasado pre', 'Mr. Universe', 'images/Veterinarians/vet1.jpg', 'wala akong masabi', 'Active'),
(2, 13, 'Baut', 'Than', '091 Tandang', '092222', 'Makati Med', 'Highest', 'New Era', 5, 'board vet', 'pinakapogi ', 'images/Veterinarians/vet2.jpg', 'nooooooo', 'Active'),
(3, 3, 'Mendoza', 'Dr. Gale', 'Stall #6, Maria Teresa Avenue Cor. Trinity Square Villa Angela, Angeles City', '045 885 6785', 'Pet Oasis Animal Clinic', '', 'DLSU', 0, '', '', 'images/Veterinarians/gale.jpg', '', 'Active'),
(4, 3, 'Coloma ', 'Dr. Jean', '3943 McArthur Balibago, Angeles City', '045 331 4807', 'Scipperke Veterinary Clinic', '', 'DLSU', 0, '', '', 'images/Veterinarians/jean.jpg', '', 'Active'),
(5, 3, 'Audia ', 'Dr. Alma', '57 M. Roxas Street Trancoville Baguio City', '074 442 3147', 'Alpha Pet Care Center', '', '', 0, '', '', 'images/Veterinarians/alma.jpg', '', 'Active'),
(6, 3, 'Castrence ', 'Dra. Anatalia ', 'Naguilian Road Baguio City', '074 442 3147', 'Naguilian Veterinary Clinic', '', '', 0, '', '', 'images/Veterinarians/anatalia.jpg', '', 'Active'),
(7, 3, 'Lumin ', 'Dr. Matthew ', 'Taguig', '074 442 3147', 'Lover Pet Veterinary Clinic', '', '', 0, '', '', 'images/Veterinarians/matthew.jpg', '', 'Active'),
(8, 3, 'Gran ', 'Dra. Tin ', 'Taguig', '074 265 2545', 'Phoenix Veterinary Clinic', '', '', 0, '', '', 'images/Veterinarians/tine.jpg', '', 'Active'),
(9, 3, 'Dela Cruz ', 'Dra. Vergel ', '400 B. Serrano Avenue, cor 12th Avenue Caloocan City', '074 265 2545', 'Phoenix Veterinary Clinic', '', '', 0, '', '', 'images/Veterinarians/vergel.jpg', '', 'Inactive'),
(10, 3, 'Celiz', 'Dra. Adii', '188 No. Bacalso Avenue Cebu City, 6000 Philippines', '074 265 2545', 'Aycardo Veterinary Center, Inc.', '', '', 0, '', '', 'images/Veterinarians/Adii.jpg', '', 'Inactive'),
(11, 3, 'Cruz', 'Dr. Odysseus ', 'Door 3 & 4, Hydrock Building II Cabaguio Avenue Davao City', '074 124 8962', 'Animal Solutions Veterinary Hospital', '', '', 0, '', '', 'images/Veterinarians/Odysseus .jpg', '', 'Active'),
(12, 3, 'Miel', 'Dra. Kahty ', 'Building 22, Malakas Street Barangay Pinyahan, Diliman Quezon City', '074 124 8962', 'Agfield International Corporation', '', '', 0, '', '', 'images/Veterinarians/Kathy.jpg', '', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`AppointmentID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`BlogID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`DeliveryNo`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`RefNo`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderNo`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`PetID`);

--
-- Indexes for table `petcategory`
--
ALTER TABLE `petcategory`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `petstatus`
--
ALTER TABLE `petstatus`
  ADD PRIMARY KEY (`StatusID`);

--
-- Indexes for table `petsupplies`
--
ALTER TABLE `petsupplies`
  ADD PRIMARY KEY (`SuppliesID`),
  ADD UNIQUE KEY `ProductID` (`SuppliesID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ReviewID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`UserListID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`UserTypeID`),
  ADD UNIQUE KEY `UserTypeID` (`UserTypeID`);

--
-- Indexes for table `veterinarian`
--
ALTER TABLE `veterinarian`
  ADD PRIMARY KEY (`VeterinarianID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `AppointmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `BlogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `DeliveryNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `RefNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `PetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `petcategory`
--
ALTER TABLE `petcategory`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `petstatus`
--
ALTER TABLE `petstatus`
  MODIFY `StatusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `petsupplies`
--
ALTER TABLE `petsupplies`
  MODIFY `SuppliesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=946;
--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `UserListID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `veterinarian`
--
ALTER TABLE `veterinarian`
  MODIFY `VeterinarianID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
