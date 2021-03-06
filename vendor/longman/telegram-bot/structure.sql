CREATE TABLE `messages` (
  `update_id` bigint UNSIGNED COMMENT 'The update\'s unique identifier.',
  `message_id` bigint COMMENT 'Unique message identifier',
  `user_id` bigint COMMENT 'User identifier',
  `date` int(11) UNSIGNED COMMENT 'Date the message was sent in Unix time',
  `chat` CHAR(255) COMMENT 'User or GroupChat object. Conversation the message belongs to — user in case of a private message, GroupChat in case of a group',
  `forward_from` CHAR(255) DEFAULT '' COMMENT 'User object. For forwarded messages, sender of the original message',
  `forward_date` int(11) UNSIGNED DEFAULT 0 COMMENT 'For forwarded messages, date the original message was sent in Unix time',
  `reply_to_message` LONGTEXT COMMENT 'Message object. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.',
  `text` LONGTEXT COMMENT 'For text messages, the actual UTF-8 text of the message',
  `audio` CHAR(255) DEFAULT '' COMMENT 'Audio object. Message is an audio file, information about the file',
  `document` CHAR(255) DEFAULT '' COMMENT 'Document object. Message is a general file, information about the file',
  `photo` CHAR(255) DEFAULT '' COMMENT 'Array of PhotoSize objects. Message is a photo, available sizes of the photo',
  `sticker` CHAR(255) DEFAULT '' COMMENT 'Sticker object. Message is a sticker, information about the sticker',
  `video` CHAR(255) DEFAULT '' COMMENT 'Video object. Message is a video, information about the video',
  `contact` CHAR(255) DEFAULT '' COMMENT 'Contact object. Message is a shared contact, information about the contact',
  `location` CHAR(255) DEFAULT '' COMMENT 'Location object. Message is a shared location, information about the location',
  `new_chat_participant` CHAR(255) COMMENT 'User object. A new member was added to the group, information about them (this member may be bot itself)',
  `left_chat_participant` CHAR(255) COMMENT 'User object. A member was removed from the group, information about them (this member may be bot itself)',
  `new_chat_title` CHAR(255) DEFAULT '' COMMENT 'A group title was changed to this value',
  `new_chat_photo` CHAR(255) DEFAULT '' COMMENT 'Array of PhotoSize objects. A group photo was change to this value',
  `delete_chat_photo` tinyint(1) DEFAULT 0 COMMENT 'Informs that the group photo was deleted',
  `group_chat_created` tinyint(1) DEFAULT 0 COMMENT 'Informs that the group has been created',
  PRIMARY KEY (`update_id`),
  KEY `message_id` (`message_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Unique user identifier',
  `username` CHAR(255) NOT NULL DEFAULT '' COMMENT 'User username',
  `first_name` CHAR(255) NOT NULL DEFAULT '' COMMENT 'User first name',
  `last_name` CHAR(255) NOT NULL DEFAULT '' COMMENT 'User last name',
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci