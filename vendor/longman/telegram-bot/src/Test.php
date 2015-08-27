<?php

/*
 * This file is part of the TelegramBot package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/
namespace Longman\TelegramBot;

define('BASE_PATH', dirname(__FILE__));

use Longman\TelegramBot\Entities\Update;
use Longman\TelegramBot\Exception\TelegramException;

/**
 * @package         Telegram
 * @author          Avtandil Kikabidze <bizkaitarra@gmail.com>
 * @copyright       Avtandil Kikabidze <bizkaitarra@gmail.com>
 * @license         http://opensource.org/licenses/mit-license.php  The MIT License (MIT)
 */
class Test
{



    /**
     * Constructor
     *     
     */
    public function __construct()
    {
        define('GRINNING_FACE_WITH_SMILING_EYES','\xF0\x9F\x98\x81');
        define('FACE_WITH_TEARS_OF_JOY','\xF0\x9F\x98\x82');
        define('SMILING_FACE_WITH_OPEN_MOUTH','\xF0\x9F\x98\x83');
        define('SMILING_FACE_WITH_OPEN_MOUTH_AND_SMILING_EYES','\xF0\x9F\x98\x84');
        define('SMILING_FACE_WITH_OPEN_MOUTH_AND_COLD_SWEAT','\xF0\x9F\x98\x85');
        define('SMILING_FACE_WITH_OPEN_MOUTH_AND_TIGHTLY_CLOSED_EYES','\xF0\x9F\x98\x86');
        define('WINKING_FACE','\xF0\x9F\x98\x89');
        define('SMILING_FACE_WITH_SMILING_EYES','\xF0\x9F\x98\x8A');
        define('FACE_SAVOURING_DELICIOUS_FOOD','\xF0\x9F\x98\x8B');
        define('RELIEVED_FACE','\xF0\x9F\x98\x8C');
        define('SMILING_FACE_WITH_HEART_SHAPED_EYES','\xF0\x9F\x98\x8D');
        define('SMIRKING_FACE','\xF0\x9F\x98\x8F');
        define('UNAMUSED_FACE','\xF0\x9F\x98\x92');
        define('FACE_WITH_COLD_SWEAT','\xF0\x9F\x98\x93');
        define('PENSIVE_FACE','\xF0\x9F\x98\x94');
        define('CONFOUNDED_FACE','\xF0\x9F\x98\x96');
        define('FACE_THROWING_A_KISS','\xF0\x9F\x98\x98');
        define('KISSING_FACE_WITH_CLOSED_EYES','\xF0\x9F\x98\x9A');
        define('FACE_WITH_STUCK_OUT_TONGUE_AND_WINKING_EYE','\xF0\x9F\x98\x9C');
        define('FACE_WITH_STUCK_OUT_TONGUE_AND_TIGHTLY_CLOSED_EYES','\xF0\x9F\x98\x9D');
        define('DISAPPOINTED_FACE','\xF0\x9F\x98\x9E');
        define('ANGRY_FACE','\xF0\x9F\x98\xA0');
        define('POUTING_FACE','\xF0\x9F\x98\xA1');
        define('CRYING_FACE','\xF0\x9F\x98\xA2');
        define('PERSEVERING_FACE','\xF0\x9F\x98\xA3');
        define('FACE_WITH_LOOK_OF_TRIUMPH','\xF0\x9F\x98\xA4');
        define('DISAPPOINTED_BUT_RELIEVED_FACE','\xF0\x9F\x98\xA5');
        define('FEARFUL_FACE','\xF0\x9F\x98\xA8');
        define('WEARY_FACE','\xF0\x9F\x98\xA9');
        define('SLEEPY_FACE','\xF0\x9F\x98\xAA');
        define('TIRED_FACE','\xF0\x9F\x98\xAB');
        define('LOUDLY_CRYING_FACE','\xF0\x9F\x98\xAD');
        define('FACE_WITH_OPEN_MOUTH_AND_COLD_SWEAT','\xF0\x9F\x98\xB0');
        define('FACE_SCREAMING_IN_FEAR','\xF0\x9F\x98\xB1');
        define('ASTONISHED_FACE','\xF0\x9F\x98\xB2');
        define('FLUSHED_FACE','\xF0\x9F\x98\xB3');
        define('DIZZY_FACE','\xF0\x9F\x98\xB5');
        define('FACE_WITH_MEDICAL_MASK','\xF0\x9F\x98\xB7');
        define('GRINNING_CAT_FACE_WITH_SMILING_EYES','\xF0\x9F\x98\xB8');
        define('CAT_FACE_WITH_TEARS_OF_JOY','\xF0\x9F\x98\xB9');
        define('SMILING_CAT_FACE_WITH_OPEN_MOUTH','\xF0\x9F\x98\xBA');
        define('SMILING_CAT_FACE_WITH_HEART_SHAPED_EYES','\xF0\x9F\x98\xBB');
        define('CAT_FACE_WITH_WRY_SMILE','\xF0\x9F\x98\xBC');
        define('KISSING_CAT_FACE_WITH_CLOSED_EYES','\xF0\x9F\x98\xBD');
        define('POUTING_CAT_FACE','\xF0\x9F\x98\xBE');
        define('CRYING_CAT_FACE','\xF0\x9F\x98\xBF');
        define('WEARY_CAT_FACE','\xF0\x9F\x99\x80');
        define('FACE_WITH_NO_GOOD_GESTURE','\xF0\x9F\x99\x85');
        define('FACE_WITH_OK_GESTURE','\xF0\x9F\x99\x86');
        define('PERSON_BOWING_DEEPLY','\xF0\x9F\x99\x87');
        define('SEE_NO_EVIL_MONKEY','\xF0\x9F\x99\x88');
        define('HEAR_NO_EVIL_MONKEY','\xF0\x9F\x99\x89');
        define('SPEAK_NO_EVIL_MONKEY','\xF0\x9F\x99\x8A');
        define('HAPPY_PERSON_RAISING_ONE_HAND','\xF0\x9F\x99\x8B');
        define('PERSON_RAISING_BOTH_HANDS_IN_CELEBRATION','\xF0\x9F\x99\x8C');
        define('PERSON_FROWNING','\xF0\x9F\x99\x8D');
        define('PERSON_WITH_POUTING_FACE','\xF0\x9F\x99\x8E');
        define('PERSON_WITH_FOLDED_HANDS','\xF0\x9F\x99\x8F');
        define('BLACK_SCISSORS','\xE2\x9C\x82');
        define('WHITE_HEAVY_CHECK_MARK','\xE2\x9C\x85');
        define('AIRPLANE','\xE2\x9C\x88');
        define('ENVELOPE','\xE2\x9C\x89');
        define('RAISED_FIST','\xE2\x9C\x8A');
        define('RAISED_HAND','\xE2\x9C\x8B');
        define('VICTORY_HAND','\xE2\x9C\x8C');
        define('PENCIL','\xE2\x9C\x8F');
        define('BLACK_NIB','\xE2\x9C\x92');
        define('HEAVY_CHECK_MARK','\xE2\x9C\x94');
        define('HEAVY_MULTIPLICATION_X','\xE2\x9C\x96');
        define('SPARKLES','\xE2\x9C\xA8');
        define('EIGHT_SPOKED_ASTERISK','\xE2\x9C\xB3');
        define('EIGHT_POINTED_BLACK_STAR','\xE2\x9C\xB4');
        define('SNOWFLAKE','\xE2\x9D\x84');
        define('SPARKLE','\xE2\x9D\x87');
        define('CROSS_MARK','\xE2\x9D\x8C');
        define('NEGATIVE_SQUARED_CROSS_MARK','\xE2\x9D\x8E');
        define('BLACK_QUESTION_MARK_ORNAMENT','\xE2\x9D\x93');
        define('WHITE_QUESTION_MARK_ORNAMENT','\xE2\x9D\x94');
        define('WHITE_EXCLAMATION_MARK_ORNAMENT','\xE2\x9D\x95');
        define('HEAVY_EXCLAMATION_MARK_SYMBOL','\xE2\x9D\x97');
        define('HEAVY_BLACK_HEART','\xE2\x9D\xA4');
        define('HEAVY_PLUS_SIGN','\xE2\x9E\x95');
        define('HEAVY_MINUS_SIGN','\xE2\x9E\x96');
        define('HEAVY_DIVISION_SIGN','\xE2\x9E\x97');
        define('BLACK_RIGHTWARDS_ARROW','\xE2\x9E\xA1');
        define('CURLY_LOOP','\xE2\x9E\xB0');
        define('ROCKET','\xF0\x9F\x9A\x80');
        define('RAILWAY_CAR','\xF0\x9F\x9A\x83');
        define('HIGH_SPEED_TRAIN','\xF0\x9F\x9A\x84');
        define('HIGH_SPEED_TRAIN_WITH_BULLET_NOSE','\xF0\x9F\x9A\x85');
        define('METRO','\xF0\x9F\x9A\x87');
        define('STATION','\xF0\x9F\x9A\x89');
        define('BUS','\xF0\x9F\x9A\x8C');
        define('BUS_STOP','\xF0\x9F\x9A\x8F');
        define('AMBULANCE','\xF0\x9F\x9A\x91');
        define('FIRE_ENGINE','\xF0\x9F\x9A\x92');
        define('POLICE_CAR','\xF0\x9F\x9A\x93');
        define('TAXI','\xF0\x9F\x9A\x95');
        define('AUTOMOBILE','\xF0\x9F\x9A\x97');
        define('RECREATIONAL_VEHICLE','\xF0\x9F\x9A\x99');
        define('DELIVERY_TRUCK','\xF0\x9F\x9A\x9A');
        define('SHIP','\xF0\x9F\x9A\xA2');
        define('SPEEDBOAT','\xF0\x9F\x9A\xA4');
        define('HORIZONTAL_TRAFFIC_LIGHT','\xF0\x9F\x9A\xA5');
        define('CONSTRUCTION_SIGN','\xF0\x9F\x9A\xA7');
        define('POLICE_CARS_REVOLVING_LIGHT','\xF0\x9F\x9A\xA8');
        define('TRIANGULAR_FLAG_ON_POST','\xF0\x9F\x9A\xA9');
        define('DOOR','\xF0\x9F\x9A\xAA');
        define('NO_ENTRY_SIGN','\xF0\x9F\x9A\xAB');
        define('SMOKING_SYMBOL','\xF0\x9F\x9A\xAC');
        define('NO_SMOKING_SYMBOL','\xF0\x9F\x9A\xAD');
        define('BICYCLE','\xF0\x9F\x9A\xB2');
        define('PEDESTRIAN','\xF0\x9F\x9A\xB6');
        define('MENS_SYMBOL','\xF0\x9F\x9A\xB9');
        define('WOMENS_SYMBOL','\xF0\x9F\x9A\xBA');
        define('RESTROOM','\xF0\x9F\x9A\xBB');
        define('BABY_SYMBOL','\xF0\x9F\x9A\xBC');
        define('TOILET','\xF0\x9F\x9A\xBD');
        define('WATER_CLOSET','\xF0\x9F\x9A\xBE');
        define('BATH','\xF0\x9F\x9B\x80');
        define('CIRCLED_LATIN_CAPITAL_LETTER_M','\xE2\x93\x82');
        define('NEGATIVE_SQUARED_LATIN_CAPITAL_LETTER_A','\xF0\x9F\x85\xB0');
        define('NEGATIVE_SQUARED_LATIN_CAPITAL_LETTER_B','\xF0\x9F\x85\xB1');
        define('NEGATIVE_SQUARED_LATIN_CAPITAL_LETTER_O','\xF0\x9F\x85\xBE');
        define('NEGATIVE_SQUARED_LATIN_CAPITAL_LETTER_P','\xF0\x9F\x85\xBF');
        define('NEGATIVE_SQUARED_AB','\xF0\x9F\x86\x8E');
        define('SQUARED_CL','\xF0\x9F\x86\x91');
        define('SQUARED_COOL','\xF0\x9F\x86\x92');
        define('SQUARED_FREE','\xF0\x9F\x86\x93');
        define('SQUARED_ID','\xF0\x9F\x86\x94');
        define('SQUARED_NEW','\xF0\x9F\x86\x95');
        define('SQUARED_NG','\xF0\x9F\x86\x96');
        define('SQUARED_OK','\xF0\x9F\x86\x97');
        define('SQUARED_SOS','\xF0\x9F\x86\x98');
        define('SQUARED_UP_WITH_EXCLAMATION_MARK','\xF0\x9F\x86\x99');
        define('SQUARED_VS','\xF0\x9F\x86\x9A');
        define('REGIONAL_INDICATOR_SYMBOL_LETTER_D_PLUS_REGIONAL_INDICATOR_SYMBOL_LETTER_E','\xF0\x9F\x87\xA9\xF0\x9F\x87\xAA');
        define('REGIONAL_INDICATOR_SYMBOL_LETTER_G_PLUS_REGIONAL_INDICATOR_SYMBOL_LETTER_B','\xF0\x9F\x87\xAC\xF0\x9F\x87\xA7');
        define('REGIONAL_INDICATOR_SYMBOL_LETTER_C_PLUS_REGIONAL_INDICATOR_SYMBOL_LETTER_N','\xF0\x9F\x87\xA8\xF0\x9F\x87\xB3');
        define('REGIONAL_INDICATOR_SYMBOL_LETTER_J_PLUS_REGIONAL_INDICATOR_SYMBOL_LETTER_P','\xF0\x9F\x87\xAF\xF0\x9F\x87\xB5');
        define('REGIONAL_INDICATOR_SYMBOL_LETTER_K_PLUS_REGIONAL_INDICATOR_SYMBOL_LETTER_R','\xF0\x9F\x87\xB0\xF0\x9F\x87\xB7');
        define('REGIONAL_INDICATOR_SYMBOL_LETTER_F_PLUS_REGIONAL_INDICATOR_SYMBOL_LETTER_R','\xF0\x9F\x87\xAB\xF0\x9F\x87\xB7');
        define('REGIONAL_INDICATOR_SYMBOL_LETTER_E_PLUS_REGIONAL_INDICATOR_SYMBOL_LETTER_S','\xF0\x9F\x87\xAA\xF0\x9F\x87\xB8');
        define('REGIONAL_INDICATOR_SYMBOL_LETTER_I_PLUS_REGIONAL_INDICATOR_SYMBOL_LETTER_T','\xF0\x9F\x87\xAE\xF0\x9F\x87\xB9');
        define('REGIONAL_INDICATOR_SYMBOL_LETTER_U_PLUS_REGIONAL_INDICATOR_SYMBOL_LETTER_S','\xF0\x9F\x87\xBA\xF0\x9F\x87\xB8');
        define('REGIONAL_INDICATOR_SYMBOL_LETTER_R_PLUS_REGIONAL_INDICATOR_SYMBOL_LETTER_U','\xF0\x9F\x87\xB7\xF0\x9F\x87\xBA');
        define('SQUARED_KATAKANA_KOKO','\xF0\x9F\x88\x81');
        define('SQUARED_KATAKANA_SA','\xF0\x9F\x88\x82');
        define('SQUARED_CJK_UNIFIED_IDEOGRAPH_7121','\xF0\x9F\x88\x9A');
        define('SQUARED_CJK_UNIFIED_IDEOGRAPH_6307','\xF0\x9F\x88\xAF');
        define('SQUARED_CJK_UNIFIED_IDEOGRAPH_7981','\xF0\x9F\x88\xB2');
        define('SQUARED_CJK_UNIFIED_IDEOGRAPH_7A7A','\xF0\x9F\x88\xB3');
        define('SQUARED_CJK_UNIFIED_IDEOGRAPH_5408','\xF0\x9F\x88\xB4');
        define('SQUARED_CJK_UNIFIED_IDEOGRAPH_6E80','\xF0\x9F\x88\xB5');
        define('SQUARED_CJK_UNIFIED_IDEOGRAPH_6709','\xF0\x9F\x88\xB6');
        define('SQUARED_CJK_UNIFIED_IDEOGRAPH_6708','\xF0\x9F\x88\xB7');
        define('SQUARED_CJK_UNIFIED_IDEOGRAPH_7533','\xF0\x9F\x88\xB8');
        define('SQUARED_CJK_UNIFIED_IDEOGRAPH_5272','\xF0\x9F\x88\xB9');
        define('SQUARED_CJK_UNIFIED_IDEOGRAPH_55B6','\xF0\x9F\x88\xBA');
        define('CIRCLED_IDEOGRAPH_ADVANTAGE','\xF0\x9F\x89\x90');
        define('CIRCLED_IDEOGRAPH_ACCEPT','\xF0\x9F\x89\x91');
        define('COPYRIGHT_SIGN','\xC2\xA9');
        define('REGISTERED_SIGN','\xC2\xAE');
        define('DOUBLE_EXCLAMATION_MARK','\xE2\x80\xBC');
        define('EXCLAMATION_QUESTION_MARK','\xE2\x81\x89');
        define('DIGIT_EIGHT_PLUS_COMBINING_ENCLOSING_KEYCAP','\x38\xE2\x83\xA3');
        define('DIGIT_NINE_PLUS_COMBINING_ENCLOSING_KEYCAP','\x39\xE2\x83\xA3');
        define('DIGIT_SEVEN_PLUS_COMBINING_ENCLOSING_KEYCAP','\x37\xE2\x83\xA3');
        define('DIGIT_SIX_PLUS_COMBINING_ENCLOSING_KEYCAP','\x36\xE2\x83\xA3');
        define('DIGIT_ONE_PLUS_COMBINING_ENCLOSING_KEYCAP','\x31\xE2\x83\xA3');
        define('DIGIT_ZERO_PLUS_COMBINING_ENCLOSING_KEYCAP','\x30\xE2\x83\xA3');
        define('DIGIT_TWO_PLUS_COMBINING_ENCLOSING_KEYCAP','\x32\xE2\x83\xA3');
        define('DIGIT_THREE_PLUS_COMBINING_ENCLOSING_KEYCAP','\x33\xE2\x83\xA3');
        define('DIGIT_FIVE_PLUS_COMBINING_ENCLOSING_KEYCAP','\x35\xE2\x83\xA3');
        define('DIGIT_FOUR_PLUS_COMBINING_ENCLOSING_KEYCAP','\x34\xE2\x83\xA3');
        define('NUMBER_SIGN_PLUS_COMBINING_ENCLOSING_KEYCAP','\x23\xE2\x83\xA3');
        define('TRADE_MARK_SIGN','\xE2\x84\xA2');
        define('INFORMATION_SOURCE','\xE2\x84\xB9');
        define('LEFT_RIGHT_ARROW','\xE2\x86\x94');
        define('UP_DOWN_ARROW','\xE2\x86\x95');
        define('NORTH_WEST_ARROW','\xE2\x86\x96');
        define('NORTH_EAST_ARROW','\xE2\x86\x97');
        define('SOUTH_EAST_ARROW','\xE2\x86\x98');
        define('SOUTH_WEST_ARROW','\xE2\x86\x99');
        define('LEFTWARDS_ARROW_WITH_HOOK','\xE2\x86\xA9');
        define('RIGHTWARDS_ARROW_WITH_HOOK','\xE2\x86\xAA');
        define('WATCH','\xE2\x8C\x9A');
        define('HOURGLASS','\xE2\x8C\x9B');
        define('BLACK_RIGHT_POINTING_DOUBLE_TRIANGLE','\xE2\x8F\xA9');
        define('BLACK_LEFT_POINTING_DOUBLE_TRIANGLE','\xE2\x8F\xAA');
        define('BLACK_UP_POINTING_DOUBLE_TRIANGLE','\xE2\x8F\xAB');
        define('BLACK_DOWN_POINTING_DOUBLE_TRIANGLE','\xE2\x8F\xAC');
        define('ALARM_CLOCK','\xE2\x8F\xB0');
        define('HOURGLASS_WITH_FLOWING_SAND','\xE2\x8F\xB3');
        define('BLACK_SMALL_SQUARE','\xE2\x96\xAA');
        define('WHITE_SMALL_SQUARE','\xE2\x96\xAB');
        define('BLACK_RIGHT_POINTING_TRIANGLE','\xE2\x96\xB6');
        define('BLACK_LEFT_POINTING_TRIANGLE','\xE2\x97\x80');
        define('WHITE_MEDIUM_SQUARE','\xE2\x97\xBB');
        define('BLACK_MEDIUM_SQUARE','\xE2\x97\xBC');
        define('WHITE_MEDIUM_SMALL_SQUARE','\xE2\x97\xBD');
        define('BLACK_MEDIUM_SMALL_SQUARE','\xE2\x97\xBE');
        define('BLACK_SUN_WITH_RAYS','\xE2\x98\x80');
        define('CLOUD','\xE2\x98\x81');
        define('BLACK_TELEPHONE','\xE2\x98\x8E');
        define('BALLOT_BOX_WITH_CHECK','\xE2\x98\x91');
        define('UMBRELLA_WITH_RAIN_DROPS','\xE2\x98\x94');
        define('HOT_BEVERAGE','\xE2\x98\x95');
        define('WHITE_UP_POINTING_INDEX','\xE2\x98\x9D');
        define('WHITE_SMILING_FACE','\xE2\x98\xBA');
        define('ARIES','\xE2\x99\x88');
        define('TAURUS','\xE2\x99\x89');
        define('GEMINI','\xE2\x99\x8A');
        define('CANCER','\xE2\x99\x8B');
        define('LEO','\xE2\x99\x8C');
        define('VIRGO','\xE2\x99\x8D');
        define('LIBRA','\xE2\x99\x8E');
        define('SCORPIUS','\xE2\x99\x8F');
        define('SAGITTARIUS','\xE2\x99\x90');
        define('CAPRICORN','\xE2\x99\x91');
        define('AQUARIUS','\xE2\x99\x92');
        define('PISCES','\xE2\x99\x93');
        define('BLACK_SPADE_SUIT','\xE2\x99\xA0');
        define('BLACK_CLUB_SUIT','\xE2\x99\xA3');
        define('BLACK_HEART_SUIT','\xE2\x99\xA5');
        define('BLACK_DIAMOND_SUIT','\xE2\x99\xA6');
        define('HOT_SPRINGS','\xE2\x99\xA8');
        define('BLACK_UNIVERSAL_RECYCLING_SYMBOL','\xE2\x99\xBB');
        define('WHEELCHAIR_SYMBOL','\xE2\x99\xBF');
        define('ANCHOR','\xE2\x9A\x93');
        define('WARNING_SIGN','\xE2\x9A\xA0');
        define('HIGH_VOLTAGE_SIGN','\xE2\x9A\xA1');
        define('MEDIUM_WHITE_CIRCLE','\xE2\x9A\xAA');
        define('MEDIUM_BLACK_CIRCLE','\xE2\x9A\xAB');
        define('SOCCER_BALL','\xE2\x9A\xBD');
        define('BASEBALL','\xE2\x9A\xBE');
        define('SNOWMAN_WITHOUT_SNOW','\xE2\x9B\x84');
        define('SUN_BEHIND_CLOUD','\xE2\x9B\x85');
        define('OPHIUCHUS','\xE2\x9B\x8E');
        define('NO_ENTRY','\xE2\x9B\x94');
        define('CHURCH','\xE2\x9B\xAA');
        define('FOUNTAIN','\xE2\x9B\xB2');
        define('FLAG_IN_HOLE','\xE2\x9B\xB3');
        define('SAILBOAT','\xE2\x9B\xB5');
        define('TENT','\xE2\x9B\xBA');
        define('FUEL_PUMP','\xE2\x9B\xBD');
        define('ARROW_POINTING_RIGHTWARDS_THEN_CURVING_UPWARDS','\xE2\xA4\xB4');
        define('ARROW_POINTING_RIGHTWARDS_THEN_CURVING_DOWNWARDS','\xE2\xA4\xB5');
        define('LEFTWARDS_BLACK_ARROW','\xE2\xAC\x85');
        define('UPWARDS_BLACK_ARROW','\xE2\xAC\x86');
        define('DOWNWARDS_BLACK_ARROW','\xE2\xAC\x87');
        define('BLACK_LARGE_SQUARE','\xE2\xAC\x9B');
        define('WHITE_LARGE_SQUARE','\xE2\xAC\x9C');
        define('WHITE_MEDIUM_STAR','\xE2\xAD\x90');
        define('HEAVY_LARGE_CIRCLE','\xE2\xAD\x95');
        define('WAVY_DASH','\xE3\x80\xB0');
        define('PART_ALTERNATION_MARK','\xE3\x80\xBD');
        define('CIRCLED_IDEOGRAPH_CONGRATULATION','\xE3\x8A\x97');
        define('CIRCLED_IDEOGRAPH_SECRET','\xE3\x8A\x99');
        define('MAHJONG_TILE_RED_DRAGON','\xF0\x9F\x80\x84');
        define('PLAYING_CARD_BLACK_JOKER','\xF0\x9F\x83\x8F');
        define('CYCLONE','\xF0\x9F\x8C\x80');
        define('FOGGY','\xF0\x9F\x8C\x81');
        define('CLOSED_UMBRELLA','\xF0\x9F\x8C\x82');
        define('NIGHT_WITH_STARS','\xF0\x9F\x8C\x83');
        define('SUNRISE_OVER_MOUNTAINS','\xF0\x9F\x8C\x84');
        define('SUNRISE','\xF0\x9F\x8C\x85');
        define('CITYSCAPE_AT_DUSK','\xF0\x9F\x8C\x86');
        define('SUNSET_OVER_BUILDINGS','\xF0\x9F\x8C\x87');
        define('RAINBOW','\xF0\x9F\x8C\x88');
        define('BRIDGE_AT_NIGHT','\xF0\x9F\x8C\x89');
        define('WATER_WAVE','\xF0\x9F\x8C\x8A');
        define('VOLCANO','\xF0\x9F\x8C\x8B');
        define('MILKY_WAY','\xF0\x9F\x8C\x8C');
        define('EARTH_GLOBE_ASIA_AUSTRALIA','\xF0\x9F\x8C\x8F');
        define('NEW_MOON_SYMBOL','\xF0\x9F\x8C\x91');
        define('FIRST_QUARTER_MOON_SYMBOL','\xF0\x9F\x8C\x93');
        define('WAXING_GIBBOUS_MOON_SYMBOL','\xF0\x9F\x8C\x94');
        define('FULL_MOON_SYMBOL','\xF0\x9F\x8C\x95');
        define('CRESCENT_MOON','\xF0\x9F\x8C\x99');
        define('FIRST_QUARTER_MOON_WITH_FACE','\xF0\x9F\x8C\x9B');
        define('GLOWING_STAR','\xF0\x9F\x8C\x9F');
        define('SHOOTING_STAR','\xF0\x9F\x8C\xA0');
        define('CHESTNUT','\xF0\x9F\x8C\xB0');
        define('SEEDLING','\xF0\x9F\x8C\xB1');
        define('PALM_TREE','\xF0\x9F\x8C\xB4');
        define('CACTUS','\xF0\x9F\x8C\xB5');
        define('TULIP','\xF0\x9F\x8C\xB7');
        define('CHERRY_BLOSSOM','\xF0\x9F\x8C\xB8');
        define('ROSE','\xF0\x9F\x8C\xB9');
        define('HIBISCUS','\xF0\x9F\x8C\xBA');
        define('SUNFLOWER','\xF0\x9F\x8C\xBB');
        define('BLOSSOM','\xF0\x9F\x8C\xBC');
        define('EAR_OF_MAIZE','\xF0\x9F\x8C\xBD');
        define('EAR_OF_RICE','\xF0\x9F\x8C\xBE');
        define('HERB','\xF0\x9F\x8C\xBF');
        define('FOUR_LEAF_CLOVER','\xF0\x9F\x8D\x80');
        define('MAPLE_LEAF','\xF0\x9F\x8D\x81');
        define('FALLEN_LEAF','\xF0\x9F\x8D\x82');
        define('LEAF_FLUTTERING_IN_WIND','\xF0\x9F\x8D\x83');
        define('MUSHROOM','\xF0\x9F\x8D\x84');
        define('TOMATO','\xF0\x9F\x8D\x85');
        define('AUBERGINE','\xF0\x9F\x8D\x86');
        define('GRAPES','\xF0\x9F\x8D\x87');
        define('MELON','\xF0\x9F\x8D\x88');
        define('WATERMELON','\xF0\x9F\x8D\x89');
        define('TANGERINE','\xF0\x9F\x8D\x8A');
        define('BANANA','\xF0\x9F\x8D\x8C');
        define('PINEAPPLE','\xF0\x9F\x8D\x8D');
        define('RED_APPLE','\xF0\x9F\x8D\x8E');
        define('GREEN_APPLE','\xF0\x9F\x8D\x8F');
        define('PEACH','\xF0\x9F\x8D\x91');
        define('CHERRIES','\xF0\x9F\x8D\x92');
        define('STRAWBERRY','\xF0\x9F\x8D\x93');
        define('HAMBURGER','\xF0\x9F\x8D\x94');
        define('SLICE_OF_PIZZA','\xF0\x9F\x8D\x95');
        define('MEAT_ON_BONE','\xF0\x9F\x8D\x96');
        define('POULTRY_LEG','\xF0\x9F\x8D\x97');
        define('RICE_CRACKER','\xF0\x9F\x8D\x98');
        define('RICE_BALL','\xF0\x9F\x8D\x99');
        define('COOKED_RICE','\xF0\x9F\x8D\x9A');
        define('CURRY_AND_RICE','\xF0\x9F\x8D\x9B');
        define('STEAMING_BOWL','\xF0\x9F\x8D\x9C');
        define('SPAGHETTI','\xF0\x9F\x8D\x9D');
        define('BREAD','\xF0\x9F\x8D\x9E');
        define('FRENCH_FRIES','\xF0\x9F\x8D\x9F');
        define('ROASTED_SWEET_POTATO','\xF0\x9F\x8D\xA0');
        define('DANGO','\xF0\x9F\x8D\xA1');
        define('ODEN','\xF0\x9F\x8D\xA2');
        define('SUSHI','\xF0\x9F\x8D\xA3');
        define('FRIED_SHRIMP','\xF0\x9F\x8D\xA4');
        define('FISH_CAKE_WITH_SWIRL_DESIGN','\xF0\x9F\x8D\xA5');
        define('SOFT_ICE_CREAM','\xF0\x9F\x8D\xA6');
        define('SHAVED_ICE','\xF0\x9F\x8D\xA7');
        define('ICE_CREAM','\xF0\x9F\x8D\xA8');
        define('DOUGHNUT','\xF0\x9F\x8D\xA9');
        define('COOKIE','\xF0\x9F\x8D\xAA');
        define('CHOCOLATE_BAR','\xF0\x9F\x8D\xAB');
        define('CANDY','\xF0\x9F\x8D\xAC');
        define('LOLLIPOP','\xF0\x9F\x8D\xAD');
        define('CUSTARD','\xF0\x9F\x8D\xAE');
        define('HONEY_POT','\xF0\x9F\x8D\xAF');
        define('SHORTCAKE','\xF0\x9F\x8D\xB0');
        define('BENTO_BOX','\xF0\x9F\x8D\xB1');
        define('POT_OF_FOOD','\xF0\x9F\x8D\xB2');
        define('COOKING','\xF0\x9F\x8D\xB3');
        define('FORK_AND_KNIFE','\xF0\x9F\x8D\xB4');
        define('TEACUP_WITHOUT_HANDLE','\xF0\x9F\x8D\xB5');
        define('SAKE_BOTTLE_AND_CUP','\xF0\x9F\x8D\xB6');
        define('WINE_GLASS','\xF0\x9F\x8D\xB7');
        define('COCKTAIL_GLASS','\xF0\x9F\x8D\xB8');
        define('TROPICAL_DRINK','\xF0\x9F\x8D\xB9');
        define('BEER_MUG','\xF0\x9F\x8D\xBA');
        define('CLINKING_BEER_MUGS','\xF0\x9F\x8D\xBB');
        define('RIBBON','\xF0\x9F\x8E\x80');
        define('WRAPPED_PRESENT','\xF0\x9F\x8E\x81');
        define('BIRTHDAY_CAKE','\xF0\x9F\x8E\x82');
        define('JACK_O_LANTERN','\xF0\x9F\x8E\x83');
        define('CHRISTMAS_TREE','\xF0\x9F\x8E\x84');
        define('FATHER_CHRISTMAS','\xF0\x9F\x8E\x85');
        define('FIREWORKS','\xF0\x9F\x8E\x86');
        define('FIREWORK_SPARKLER','\xF0\x9F\x8E\x87');
        define('BALLOON','\xF0\x9F\x8E\x88');
        define('PARTY_POPPER','\xF0\x9F\x8E\x89');
        define('CONFETTI_BALL','\xF0\x9F\x8E\x8A');
        define('TANABATA_TREE','\xF0\x9F\x8E\x8B');
        define('CROSSED_FLAGS','\xF0\x9F\x8E\x8C');
        define('PINE_DECORATION','\xF0\x9F\x8E\x8D');
        define('JAPANESE_DOLLS','\xF0\x9F\x8E\x8E');
        define('CARP_STREAMER','\xF0\x9F\x8E\x8F');
        define('WIND_CHIME','\xF0\x9F\x8E\x90');
        define('MOON_VIEWING_CEREMONY','\xF0\x9F\x8E\x91');
        define('SCHOOL_SATCHEL','\xF0\x9F\x8E\x92');
        define('GRADUATION_CAP','\xF0\x9F\x8E\x93');
        define('CAROUSEL_HORSE','\xF0\x9F\x8E\xA0');
        define('FERRIS_WHEEL','\xF0\x9F\x8E\xA1');
        define('ROLLER_COASTER','\xF0\x9F\x8E\xA2');
        define('FISHING_POLE_AND_FISH','\xF0\x9F\x8E\xA3');
        define('MICROPHONE','\xF0\x9F\x8E\xA4');
        define('MOVIE_CAMERA','\xF0\x9F\x8E\xA5');
        define('CINEMA','\xF0\x9F\x8E\xA6');
        define('HEADPHONE','\xF0\x9F\x8E\xA7');
        define('ARTIST_PALETTE','\xF0\x9F\x8E\xA8');
        define('TOP_HAT','\xF0\x9F\x8E\xA9');
        define('CIRCUS_TENT','\xF0\x9F\x8E\xAA');
        define('TICKET','\xF0\x9F\x8E\xAB');
        define('CLAPPER_BOARD','\xF0\x9F\x8E\xAC');
        define('PERFORMING_ARTS','\xF0\x9F\x8E\xAD');
        define('VIDEO_GAME','\xF0\x9F\x8E\xAE');
        define('DIRECT_HIT','\xF0\x9F\x8E\xAF');
        define('SLOT_MACHINE','\xF0\x9F\x8E\xB0');
        define('BILLIARDS','\xF0\x9F\x8E\xB1');
        define('GAME_DIE','\xF0\x9F\x8E\xB2');
        define('BOWLING','\xF0\x9F\x8E\xB3');
        define('FLOWER_PLAYING_CARDS','\xF0\x9F\x8E\xB4');
        define('MUSICAL_NOTE','\xF0\x9F\x8E\xB5');
        define('MULTIPLE_MUSICAL_NOTES','\xF0\x9F\x8E\xB6');
        define('SAXOPHONE','\xF0\x9F\x8E\xB7');
        define('GUITAR','\xF0\x9F\x8E\xB8');
        define('MUSICAL_KEYBOARD','\xF0\x9F\x8E\xB9');
        define('TRUMPET','\xF0\x9F\x8E\xBA');
        define('VIOLIN','\xF0\x9F\x8E\xBB');
        define('MUSICAL_SCORE','\xF0\x9F\x8E\xBC');
        define('RUNNING_SHIRT_WITH_SASH','\xF0\x9F\x8E\xBD');
        define('TENNIS_RACQUET_AND_BALL','\xF0\x9F\x8E\xBE');
        define('SKI_AND_SKI_BOOT','\xF0\x9F\x8E\xBF');
        define('BASKETBALL_AND_HOOP','\xF0\x9F\x8F\x80');
        define('CHEQUERED_FLAG','\xF0\x9F\x8F\x81');
        define('SNOWBOARDER','\xF0\x9F\x8F\x82');
        define('RUNNER','\xF0\x9F\x8F\x83');
        define('SURFER','\xF0\x9F\x8F\x84');
        define('TROPHY','\xF0\x9F\x8F\x86');
        define('AMERICAN_FOOTBALL','\xF0\x9F\x8F\x88');
        define('SWIMMER','\xF0\x9F\x8F\x8A');
        define('HOUSE_BUILDING','\xF0\x9F\x8F\xA0');
        define('HOUSE_WITH_GARDEN','\xF0\x9F\x8F\xA1');
        define('OFFICE_BUILDING','\xF0\x9F\x8F\xA2');
        define('JAPANESE_POST_OFFICE','\xF0\x9F\x8F\xA3');
        define('HOSPITAL','\xF0\x9F\x8F\xA5');
        define('BANK','\xF0\x9F\x8F\xA6');
        define('AUTOMATED_TELLER_MACHINE','\xF0\x9F\x8F\xA7');
        define('HOTEL','\xF0\x9F\x8F\xA8');
        define('LOVE_HOTEL','\xF0\x9F\x8F\xA9');
        define('CONVENIENCE_STORE','\xF0\x9F\x8F\xAA');
        define('SCHOOL','\xF0\x9F\x8F\xAB');
        define('DEPARTMENT_STORE','\xF0\x9F\x8F\xAC');
        define('FACTORY','\xF0\x9F\x8F\xAD');
        define('IZAKAYA_LANTERN','\xF0\x9F\x8F\xAE');
        define('JAPANESE_CASTLE','\xF0\x9F\x8F\xAF');
        define('EUROPEAN_CASTLE','\xF0\x9F\x8F\xB0');
        define('SNAIL','\xF0\x9F\x90\x8C');
        define('SNAKE','\xF0\x9F\x90\x8D');
        define('HORSE','\xF0\x9F\x90\x8E');
        define('SHEEP','\xF0\x9F\x90\x91');
        define('MONKEY','\xF0\x9F\x90\x92');
        define('CHICKEN','\xF0\x9F\x90\x94');
        define('BOAR','\xF0\x9F\x90\x97');
        define('ELEPHANT','\xF0\x9F\x90\x98');
        define('OCTOPUS','\xF0\x9F\x90\x99');
        define('SPIRAL_SHELL','\xF0\x9F\x90\x9A');
        define('BUG','\xF0\x9F\x90\x9B');
        define('ANT','\xF0\x9F\x90\x9C');
        define('HONEYBEE','\xF0\x9F\x90\x9D');
        define('LADY_BEETLE','\xF0\x9F\x90\x9E');
        define('FISH','\xF0\x9F\x90\x9F');
        define('TROPICAL_FISH','\xF0\x9F\x90\xA0');
        define('BLOWFISH','\xF0\x9F\x90\xA1');
        define('TURTLE','\xF0\x9F\x90\xA2');
        define('HATCHING_CHICK','\xF0\x9F\x90\xA3');
        define('BABY_CHICK','\xF0\x9F\x90\xA4');
        define('FRONT_FACING_BABY_CHICK','\xF0\x9F\x90\xA5');
        define('BIRD','\xF0\x9F\x90\xA6');
        define('PENGUIN','\xF0\x9F\x90\xA7');
        define('KOALA','\xF0\x9F\x90\xA8');
        define('POODLE','\xF0\x9F\x90\xA9');
        define('BACTRIAN_CAMEL','\xF0\x9F\x90\xAB');
        define('DOLPHIN','\xF0\x9F\x90\xAC');
        define('MOUSE_FACE','\xF0\x9F\x90\xAD');
        define('COW_FACE','\xF0\x9F\x90\xAE');
        define('TIGER_FACE','\xF0\x9F\x90\xAF');
        define('RABBIT_FACE','\xF0\x9F\x90\xB0');
        define('CAT_FACE','\xF0\x9F\x90\xB1');
        define('DRAGON_FACE','\xF0\x9F\x90\xB2');
        define('SPOUTING_WHALE','\xF0\x9F\x90\xB3');
        define('HORSE_FACE','\xF0\x9F\x90\xB4');
        define('MONKEY_FACE','\xF0\x9F\x90\xB5');
        define('DOG_FACE','\xF0\x9F\x90\xB6');
        define('PIG_FACE','\xF0\x9F\x90\xB7');
        define('FROG_FACE','\xF0\x9F\x90\xB8');
        define('HAMSTER_FACE','\xF0\x9F\x90\xB9');
        define('WOLF_FACE','\xF0\x9F\x90\xBA');
        define('BEAR_FACE','\xF0\x9F\x90\xBB');
        define('PANDA_FACE','\xF0\x9F\x90\xBC');
        define('PIG_NOSE','\xF0\x9F\x90\xBD');
        define('PAW_PRINTS','\xF0\x9F\x90\xBE');
        define('EYES','\xF0\x9F\x91\x80');
        define('EAR','\xF0\x9F\x91\x82');
        define('NOSE','\xF0\x9F\x91\x83');
        define('MOUTH','\xF0\x9F\x91\x84');
        define('TONGUE','\xF0\x9F\x91\x85');
        define('WHITE_UP_POINTING_BACKHAND_INDEX','\xF0\x9F\x91\x86');
        define('WHITE_DOWN_POINTING_BACKHAND_INDEX','\xF0\x9F\x91\x87');
        define('WHITE_LEFT_POINTING_BACKHAND_INDEX','\xF0\x9F\x91\x88');
        define('WHITE_RIGHT_POINTING_BACKHAND_INDEX','\xF0\x9F\x91\x89');
        define('FISTED_HAND_SIGN','\xF0\x9F\x91\x8A');
        define('WAVING_HAND_SIGN','\xF0\x9F\x91\x8B');
        define('OK_HAND_SIGN','\xF0\x9F\x91\x8C');
        define('THUMBS_UP_SIGN','\xF0\x9F\x91\x8D');
        define('THUMBS_DOWN_SIGN','\xF0\x9F\x91\x8E');
        define('CLAPPING_HANDS_SIGN','\xF0\x9F\x91\x8F');
        define('OPEN_HANDS_SIGN','\xF0\x9F\x91\x90');
        define('CROWN','\xF0\x9F\x91\x91');
        define('WOMANS_HAT','\xF0\x9F\x91\x92');
        define('EYEGLASSES','\xF0\x9F\x91\x93');
        define('NECKTIE','\xF0\x9F\x91\x94');
        define('T_SHIRT','\xF0\x9F\x91\x95');
        define('JEANS','\xF0\x9F\x91\x96');
        define('DRESS','\xF0\x9F\x91\x97');
        define('KIMONO','\xF0\x9F\x91\x98');
        define('BIKINI','\xF0\x9F\x91\x99');
        define('WOMANS_CLOTHES','\xF0\x9F\x91\x9A');
        define('PURSE','\xF0\x9F\x91\x9B');
        define('HANDBAG','\xF0\x9F\x91\x9C');
        define('POUCH','\xF0\x9F\x91\x9D');
        define('MANS_SHOE','\xF0\x9F\x91\x9E');
        define('ATHLETIC_SHOE','\xF0\x9F\x91\x9F');
        define('HIGH_HEELED_SHOE','\xF0\x9F\x91\xA0');
        define('WOMANS_SANDAL','\xF0\x9F\x91\xA1');
        define('WOMANS_BOOTS','\xF0\x9F\x91\xA2');
        define('FOOTPRINTS','\xF0\x9F\x91\xA3');
        define('BUST_IN_SILHOUETTE','\xF0\x9F\x91\xA4');
        define('BOY','\xF0\x9F\x91\xA6');
        define('GIRL','\xF0\x9F\x91\xA7');
        define('MAN','\xF0\x9F\x91\xA8');
        define('WOMAN','\xF0\x9F\x91\xA9');
        define('FAMILY','\xF0\x9F\x91\xAA');
        define('MAN_AND_WOMAN_HOLDING_HANDS','\xF0\x9F\x91\xAB');
        define('POLICE_OFFICER','\xF0\x9F\x91\xAE');
        define('WOMAN_WITH_BUNNY_EARS','\xF0\x9F\x91\xAF');
        define('BRIDE_WITH_VEIL','\xF0\x9F\x91\xB0');
        define('PERSON_WITH_BLOND_HAIR','\xF0\x9F\x91\xB1');
        define('MAN_WITH_GUA_PI_MAO','\xF0\x9F\x91\xB2');
        define('MAN_WITH_TURBAN','\xF0\x9F\x91\xB3');
        define('OLDER_MAN','\xF0\x9F\x91\xB4');
        define('OLDER_WOMAN','\xF0\x9F\x91\xB5');
        define('BABY','\xF0\x9F\x91\xB6');
        define('CONSTRUCTION_WORKER','\xF0\x9F\x91\xB7');
        define('PRINCESS','\xF0\x9F\x91\xB8');
        define('JAPANESE_OGRE','\xF0\x9F\x91\xB9');
        define('JAPANESE_GOBLIN','\xF0\x9F\x91\xBA');
        define('GHOST','\xF0\x9F\x91\xBB');
        define('BABY_ANGEL','\xF0\x9F\x91\xBC');
        define('EXTRATERRESTRIAL_ALIEN','\xF0\x9F\x91\xBD');
        define('ALIEN_MONSTER','\xF0\x9F\x91\xBE');
        define('IMP','\xF0\x9F\x91\xBF');
        define('SKULL','\xF0\x9F\x92\x80');
        define('INFORMATION_DESK_PERSON','\xF0\x9F\x92\x81');
        define('GUARDSMAN','\xF0\x9F\x92\x82');
        define('DANCER','\xF0\x9F\x92\x83');
        define('LIPSTICK','\xF0\x9F\x92\x84');
        define('NAIL_POLISH','\xF0\x9F\x92\x85');
        define('FACE_MASSAGE','\xF0\x9F\x92\x86');
        define('HAIRCUT','\xF0\x9F\x92\x87');
        define('BARBER_POLE','\xF0\x9F\x92\x88');
        define('SYRINGE','\xF0\x9F\x92\x89');
        define('PILL','\xF0\x9F\x92\x8A');
        define('KISS_MARK','\xF0\x9F\x92\x8B');
        define('LOVE_LETTER','\xF0\x9F\x92\x8C');
        define('RING','\xF0\x9F\x92\x8D');
        define('GEM_STONE','\xF0\x9F\x92\x8E');
        define('KISS','\xF0\x9F\x92\x8F');
        define('BOUQUET','\xF0\x9F\x92\x90');
        define('COUPLE_WITH_HEART','\xF0\x9F\x92\x91');
        define('WEDDING','\xF0\x9F\x92\x92');
        define('BEATING_HEART','\xF0\x9F\x92\x93');
        define('BROKEN_HEART','\xF0\x9F\x92\x94');
        define('TWO_HEARTS','\xF0\x9F\x92\x95');
        define('SPARKLING_HEART','\xF0\x9F\x92\x96');
        define('GROWING_HEART','\xF0\x9F\x92\x97');
        define('HEART_WITH_ARROW','\xF0\x9F\x92\x98');
        define('BLUE_HEART','\xF0\x9F\x92\x99');
        define('GREEN_HEART','\xF0\x9F\x92\x9A');
        define('YELLOW_HEART','\xF0\x9F\x92\x9B');
        define('PURPLE_HEART','\xF0\x9F\x92\x9C');
        define('HEART_WITH_RIBBON','\xF0\x9F\x92\x9D');
        define('REVOLVING_HEARTS','\xF0\x9F\x92\x9E');
        define('HEART_DECORATION','\xF0\x9F\x92\x9F');
        define('DIAMOND_SHAPE_WITH_A_DOT_INSIDE','\xF0\x9F\x92\xA0');
        define('ELECTRIC_LIGHT_BULB','\xF0\x9F\x92\xA1');
        define('ANGER_SYMBOL','\xF0\x9F\x92\xA2');
        define('BOMB','\xF0\x9F\x92\xA3');
        define('SLEEPING_SYMBOL','\xF0\x9F\x92\xA4');
        define('COLLISION_SYMBOL','\xF0\x9F\x92\xA5');
        define('SPLASHING_SWEAT_SYMBOL','\xF0\x9F\x92\xA6');
        define('DROPLET','\xF0\x9F\x92\xA7');
        define('DASH_SYMBOL','\xF0\x9F\x92\xA8');
        define('PILE_OF_POO','\xF0\x9F\x92\xA9');
        define('FLEXED_BICEPS','\xF0\x9F\x92\xAA');
        define('DIZZY_SYMBOL','\xF0\x9F\x92\xAB');
        define('SPEECH_BALLOON','\xF0\x9F\x92\xAC');
        define('WHITE_FLOWER','\xF0\x9F\x92\xAE');
        define('HUNDRED_POINTS_SYMBOL','\xF0\x9F\x92\xAF');
        define('MONEY_BAG','\xF0\x9F\x92\xB0');
        define('CURRENCY_EXCHANGE','\xF0\x9F\x92\xB1');
        define('HEAVY_DOLLAR_SIGN','\xF0\x9F\x92\xB2');
        define('CREDIT_CARD','\xF0\x9F\x92\xB3');
        define('BANKNOTE_WITH_YEN_SIGN','\xF0\x9F\x92\xB4');
        define('BANKNOTE_WITH_DOLLAR_SIGN','\xF0\x9F\x92\xB5');
        define('MONEY_WITH_WINGS','\xF0\x9F\x92\xB8');
        define('CHART_WITH_UPWARDS_TREND_AND_YEN_SIGN','\xF0\x9F\x92\xB9');
        define('SEAT','\xF0\x9F\x92\xBA');
        define('PERSONAL_COMPUTER','\xF0\x9F\x92\xBB');
        define('BRIEFCASE','\xF0\x9F\x92\xBC');
        define('MINIDISC','\xF0\x9F\x92\xBD');
        define('FLOPPY_DISK','\xF0\x9F\x92\xBE');
        define('OPTICAL_DISC','\xF0\x9F\x92\xBF');
        define('DVD','\xF0\x9F\x93\x80');
        define('FILE_FOLDER','\xF0\x9F\x93\x81');
        define('OPEN_FILE_FOLDER','\xF0\x9F\x93\x82');
        define('PAGE_WITH_CURL','\xF0\x9F\x93\x83');
        define('PAGE_FACING_UP','\xF0\x9F\x93\x84');
        define('CALENDAR','\xF0\x9F\x93\x85');
        define('TEAR_OFF_CALENDAR','\xF0\x9F\x93\x86');
        define('CARD_INDEX','\xF0\x9F\x93\x87');
        define('CHART_WITH_UPWARDS_TREND','\xF0\x9F\x93\x88');
        define('CHART_WITH_DOWNWARDS_TREND','\xF0\x9F\x93\x89');
        define('BAR_CHART','\xF0\x9F\x93\x8A');
        define('CLIPBOARD','\xF0\x9F\x93\x8B');
        define('PUSHPIN','\xF0\x9F\x93\x8C');
        define('ROUND_PUSHPIN','\xF0\x9F\x93\x8D');
        define('PAPERCLIP','\xF0\x9F\x93\x8E');
        define('STRAIGHT_RULER','\xF0\x9F\x93\x8F');
        define('TRIANGULAR_RULER','\xF0\x9F\x93\x90');
        define('BOOKMARK_TABS','\xF0\x9F\x93\x91');
        define('LEDGER','\xF0\x9F\x93\x92');
        define('NOTEBOOK','\xF0\x9F\x93\x93');
        define('NOTEBOOK_WITH_DECORATIVE_COVER','\xF0\x9F\x93\x94');
        define('CLOSED_BOOK','\xF0\x9F\x93\x95');
        define('OPEN_BOOK','\xF0\x9F\x93\x96');
        define('GREEN_BOOK','\xF0\x9F\x93\x97');
        define('BLUE_BOOK','\xF0\x9F\x93\x98');
        define('ORANGE_BOOK','\xF0\x9F\x93\x99');
        define('BOOKS','\xF0\x9F\x93\x9A');
        define('NAME_BADGE','\xF0\x9F\x93\x9B');
        define('SCROLL','\xF0\x9F\x93\x9C');
        define('MEMO','\xF0\x9F\x93\x9D');
        define('TELEPHONE_RECEIVER','\xF0\x9F\x93\x9E');
        define('PAGER','\xF0\x9F\x93\x9F');
        define('FAX_MACHINE','\xF0\x9F\x93\xA0');
        define('SATELLITE_ANTENNA','\xF0\x9F\x93\xA1');
        define('PUBLIC_ADDRESS_LOUDSPEAKER','\xF0\x9F\x93\xA2');
        define('CHEERING_MEGAPHONE','\xF0\x9F\x93\xA3');
        define('OUTBOX_TRAY','\xF0\x9F\x93\xA4');
        define('INBOX_TRAY','\xF0\x9F\x93\xA5');
        define('PACKAGE','\xF0\x9F\x93\xA6');
        define('E_MAIL_SYMBOL','\xF0\x9F\x93\xA7');
        define('INCOMING_ENVELOPE','\xF0\x9F\x93\xA8');
        define('ENVELOPE_WITH_DOWNWARDS_ARROW_ABOVE','\xF0\x9F\x93\xA9');
        define('CLOSED_MAILBOX_WITH_LOWERED_FLAG','\xF0\x9F\x93\xAA');
        define('CLOSED_MAILBOX_WITH_RAISED_FLAG','\xF0\x9F\x93\xAB');
        define('POSTBOX','\xF0\x9F\x93\xAE');
        define('NEWSPAPER','\xF0\x9F\x93\xB0');
        define('MOBILE_PHONE','\xF0\x9F\x93\xB1');
        define('MOBILE_PHONE_WITH_RIGHTWARDS_ARROW_AT_LEFT','\xF0\x9F\x93\xB2');
        define('VIBRATION_MODE','\xF0\x9F\x93\xB3');
        define('MOBILE_PHONE_OFF','\xF0\x9F\x93\xB4');
        define('ANTENNA_WITH_BARS','\xF0\x9F\x93\xB6');
        define('CAMERA','\xF0\x9F\x93\xB7');
        define('VIDEO_CAMERA','\xF0\x9F\x93\xB9');
        define('TELEVISION','\xF0\x9F\x93\xBA');
        define('RADIO','\xF0\x9F\x93\xBB');
        define('VIDEOCASSETTE','\xF0\x9F\x93\xBC');
        define('CLOCKWISE_DOWNWARDS_AND_UPWARDS_OPEN_CIRCLE_ARROWS','\xF0\x9F\x94\x83');
        define('SPEAKER_WITH_THREE_SOUND_WAVES','\xF0\x9F\x94\x8A');
        define('BATTERY','\xF0\x9F\x94\x8B');
        define('ELECTRIC_PLUG','\xF0\x9F\x94\x8C');
        define('LEFT_POINTING_MAGNIFYING_GLASS','\xF0\x9F\x94\x8D');
        define('RIGHT_POINTING_MAGNIFYING_GLASS','\xF0\x9F\x94\x8E');
        define('LOCK_WITH_INK_PEN','\xF0\x9F\x94\x8F');
        define('CLOSED_LOCK_WITH_KEY','\xF0\x9F\x94\x90');
        define('KEY','\xF0\x9F\x94\x91');
        define('LOCK','\xF0\x9F\x94\x92');
        define('OPEN_LOCK','\xF0\x9F\x94\x93');
        define('BELL','\xF0\x9F\x94\x94');
        define('BOOKMARK','\xF0\x9F\x94\x96');
        define('LINK_SYMBOL','\xF0\x9F\x94\x97');
        define('RADIO_BUTTON','\xF0\x9F\x94\x98');
        define('BACK_WITH_LEFTWARDS_ARROW_ABOVE','\xF0\x9F\x94\x99');
        define('END_WITH_LEFTWARDS_ARROW_ABOVE','\xF0\x9F\x94\x9A');
        define('ON_WITH_EXCLAMATION_MARK_WITH_LEFT_RIGHT_ARROW_ABOVE','\xF0\x9F\x94\x9B');
        define('SOON_WITH_RIGHTWARDS_ARROW_ABOVE','\xF0\x9F\x94\x9C');
        define('TOP_WITH_UPWARDS_ARROW_ABOVE','\xF0\x9F\x94\x9D');
        define('NO_ONE_UNDER_EIGHTEEN_SYMBOL','\xF0\x9F\x94\x9E');
        define('KEYCAP_TEN','\xF0\x9F\x94\x9F');
        define('INPUT_SYMBOL_FOR_LATIN_CAPITAL_LETTERS','\xF0\x9F\x94\xA0');
        define('INPUT_SYMBOL_FOR_LATIN_SMALL_LETTERS','\xF0\x9F\x94\xA1');
        define('INPUT_SYMBOL_FOR_NUMBERS','\xF0\x9F\x94\xA2');
        define('INPUT_SYMBOL_FOR_SYMBOLS','\xF0\x9F\x94\xA3');
        define('INPUT_SYMBOL_FOR_LATIN_LETTERS','\xF0\x9F\x94\xA4');
        define('FIRE','\xF0\x9F\x94\xA5');
        define('ELECTRIC_TORCH','\xF0\x9F\x94\xA6');
        define('WRENCH','\xF0\x9F\x94\xA7');
        define('HAMMER','\xF0\x9F\x94\xA8');
        define('NUT_AND_BOLT','\xF0\x9F\x94\xA9');
        define('HOCHO','\xF0\x9F\x94\xAA');
        define('PISTOL','\xF0\x9F\x94\xAB');
        define('CRYSTAL_BALL','\xF0\x9F\x94\xAE');
        define('SIX_POINTED_STAR_WITH_MIDDLE_DOT','\xF0\x9F\x94\xAF');
        define('JAPANESE_SYMBOL_FOR_BEGINNER','\xF0\x9F\x94\xB0');
        define('TRIDENT_EMBLEM','\xF0\x9F\x94\xB1');
        define('BLACK_SQUARE_BUTTON','\xF0\x9F\x94\xB2');
        define('WHITE_SQUARE_BUTTON','\xF0\x9F\x94\xB3');
        define('LARGE_RED_CIRCLE','\xF0\x9F\x94\xB4');
        define('LARGE_BLUE_CIRCLE','\xF0\x9F\x94\xB5');
        define('LARGE_ORANGE_DIAMOND','\xF0\x9F\x94\xB6');
        define('LARGE_BLUE_DIAMOND','\xF0\x9F\x94\xB7');
        define('SMALL_ORANGE_DIAMOND','\xF0\x9F\x94\xB8');
        define('SMALL_BLUE_DIAMOND','\xF0\x9F\x94\xB9');
        define('UP_POINTING_RED_TRIANGLE','\xF0\x9F\x94\xBA');
        define('DOWN_POINTING_RED_TRIANGLE','\xF0\x9F\x94\xBB');
        define('UP_POINTING_SMALL_RED_TRIANGLE','\xF0\x9F\x94\xBC');
        define('DOWN_POINTING_SMALL_RED_TRIANGLE','\xF0\x9F\x94\xBD');
        define('CLOCK_FACE_ONE_OCLOCK','\xF0\x9F\x95\x90');
        define('CLOCK_FACE_TWO_OCLOCK','\xF0\x9F\x95\x91');
        define('CLOCK_FACE_THREE_OCLOCK','\xF0\x9F\x95\x92');
        define('CLOCK_FACE_FOUR_OCLOCK','\xF0\x9F\x95\x93');
        define('CLOCK_FACE_FIVE_OCLOCK','\xF0\x9F\x95\x94');
        define('CLOCK_FACE_SIX_OCLOCK','\xF0\x9F\x95\x95');
        define('CLOCK_FACE_SEVEN_OCLOCK','\xF0\x9F\x95\x96');
        define('CLOCK_FACE_EIGHT_OCLOCK','\xF0\x9F\x95\x97');
        define('CLOCK_FACE_NINE_OCLOCK','\xF0\x9F\x95\x98');
        define('CLOCK_FACE_TEN_OCLOCK','\xF0\x9F\x95\x99');
        define('CLOCK_FACE_ELEVEN_OCLOCK','\xF0\x9F\x95\x9A');
        define('CLOCK_FACE_TWELVE_OCLOCK','\xF0\x9F\x95\x9B');
        define('MOUNT_FUJI','\xF0\x9F\x97\xBB');
        define('TOKYO_TOWER','\xF0\x9F\x97\xBC');
        define('STATUE_OF_LIBERTY','\xF0\x9F\x97\xBD');
        define('SILHOUETTE_OF_JAPAN','\xF0\x9F\x97\xBE');
        define('MOYAI','\xF0\x9F\x97\xBF');
        define('GRINNING_FACE','\xF0\x9F\x98\x80');
        define('SMILING_FACE_WITH_HALO','\xF0\x9F\x98\x87');
        define('SMILING_FACE_WITH_HORNS','\xF0\x9F\x98\x88');
        define('SMILING_FACE_WITH_SUNGLASSES','\xF0\x9F\x98\x8E');
        define('NEUTRAL_FACE','\xF0\x9F\x98\x90');
        define('EXPRESSIONLESS_FACE','\xF0\x9F\x98\x91');
        define('CONFUSED_FACE','\xF0\x9F\x98\x95');
        define('KISSING_FACE','\xF0\x9F\x98\x97');
        define('KISSING_FACE_WITH_SMILING_EYES','\xF0\x9F\x98\x99');
        define('FACE_WITH_STUCK_OUT_TONGUE','\xF0\x9F\x98\x9B');
        define('WORRIED_FACE','\xF0\x9F\x98\x9F');
        define('FROWNING_FACE_WITH_OPEN_MOUTH','\xF0\x9F\x98\xA6');
        define('ANGUISHED_FACE','\xF0\x9F\x98\xA7');
        define('GRIMACING_FACE','\xF0\x9F\x98\xAC');
        define('FACE_WITH_OPEN_MOUTH','\xF0\x9F\x98\xAE');
        define('HUSHED_FACE','\xF0\x9F\x98\xAF');
        define('SLEEPING_FACE','\xF0\x9F\x98\xB4');
        define('FACE_WITHOUT_MOUTH','\xF0\x9F\x98\xB6');
        define('HELICOPTER','\xF0\x9F\x9A\x81');
        define('STEAM_LOCOMOTIVE','\xF0\x9F\x9A\x82');
        define('TRAIN','\xF0\x9F\x9A\x86');
        define('LIGHT_RAIL','\xF0\x9F\x9A\x88');
        define('TRAM','\xF0\x9F\x9A\x8A');
        define('ONCOMING_BUS','\xF0\x9F\x9A\x8D');
        define('TROLLEYBUS','\xF0\x9F\x9A\x8E');
        define('MINIBUS','\xF0\x9F\x9A\x90');
        define('ONCOMING_POLICE_CAR','\xF0\x9F\x9A\x94');
        define('ONCOMING_TAXI','\xF0\x9F\x9A\x96');
        define('ONCOMING_AUTOMOBILE','\xF0\x9F\x9A\x98');
        define('ARTICULATED_LORRY','\xF0\x9F\x9A\x9B');
        define('TRACTOR','\xF0\x9F\x9A\x9C');
        define('MONORAIL','\xF0\x9F\x9A\x9D');
        define('MOUNTAIN_RAILWAY','\xF0\x9F\x9A\x9E');
        define('SUSPENSION_RAILWAY','\xF0\x9F\x9A\x9F');
        define('MOUNTAIN_CABLEWAY','\xF0\x9F\x9A\xA0');
        define('AERIAL_TRAMWAY','\xF0\x9F\x9A\xA1');
        define('ROWBOAT','\xF0\x9F\x9A\xA3');
        define('VERTICAL_TRAFFIC_LIGHT','\xF0\x9F\x9A\xA6');
        define('PUT_LITTER_IN_ITS_PLACE_SYMBOL','\xF0\x9F\x9A\xAE');
        define('DO_NOT_LITTER_SYMBOL','\xF0\x9F\x9A\xAF');
        define('POTABLE_WATER_SYMBOL','\xF0\x9F\x9A\xB0');
        define('NON_POTABLE_WATER_SYMBOL','\xF0\x9F\x9A\xB1');
        define('NO_BICYCLES','\xF0\x9F\x9A\xB3');
        define('BICYCLIST','\xF0\x9F\x9A\xB4');
        define('MOUNTAIN_BICYCLIST','\xF0\x9F\x9A\xB5');
        define('NO_PEDESTRIANS','\xF0\x9F\x9A\xB7');
        define('CHILDREN_CROSSING','\xF0\x9F\x9A\xB8');
        define('SHOWER','\xF0\x9F\x9A\xBF');
        define('BATHTUB','\xF0\x9F\x9B\x81');
        define('PASSPORT_CONTROL','\xF0\x9F\x9B\x82');
        define('CUSTOMS','\xF0\x9F\x9B\x83');
        define('BAGGAGE_CLAIM','\xF0\x9F\x9B\x84');
        define('LEFT_LUGGAGE','\xF0\x9F\x9B\x85');
        define('EARTH_GLOBE_EUROPE_AFRICA','\xF0\x9F\x8C\x8D');
        define('EARTH_GLOBE_AMERICAS','\xF0\x9F\x8C\x8E');
        define('GLOBE_WITH_MERIDIANS','\xF0\x9F\x8C\x90');
        define('WAXING_CRESCENT_MOON_SYMBOL','\xF0\x9F\x8C\x92');
        define('WANING_GIBBOUS_MOON_SYMBOL','\xF0\x9F\x8C\x96');
        define('LAST_QUARTER_MOON_SYMBOL','\xF0\x9F\x8C\x97');
        define('WANING_CRESCENT_MOON_SYMBOL','\xF0\x9F\x8C\x98');
        define('NEW_MOON_WITH_FACE','\xF0\x9F\x8C\x9A');
        define('LAST_QUARTER_MOON_WITH_FACE','\xF0\x9F\x8C\x9C');
        define('FULL_MOON_WITH_FACE','\xF0\x9F\x8C\x9D');
        define('SUN_WITH_FACE','\xF0\x9F\x8C\x9E');
        define('EVERGREEN_TREE','\xF0\x9F\x8C\xB2');
        define('DECIDUOUS_TREE','\xF0\x9F\x8C\xB3');
        define('LEMON','\xF0\x9F\x8D\x8B');
        define('PEAR','\xF0\x9F\x8D\x90');
        define('BABY_BOTTLE','\xF0\x9F\x8D\xBC');
        define('HORSE_RACING','\xF0\x9F\x8F\x87');
        define('RUGBY_FOOTBALL','\xF0\x9F\x8F\x89');
        define('EUROPEAN_POST_OFFICE','\xF0\x9F\x8F\xA4');
        define('RAT','\xF0\x9F\x90\x80');
        define('MOUSE','\xF0\x9F\x90\x81');
        define('OX','\xF0\x9F\x90\x82');
        define('WATER_BUFFALO','\xF0\x9F\x90\x83');
        define('COW','\xF0\x9F\x90\x84');
        define('TIGER','\xF0\x9F\x90\x85');
        define('LEOPARD','\xF0\x9F\x90\x86');
        define('RABBIT','\xF0\x9F\x90\x87');
        define('CAT','\xF0\x9F\x90\x88');
        define('DRAGON','\xF0\x9F\x90\x89');
        define('CROCODILE','\xF0\x9F\x90\x8A');
        define('WHALE','\xF0\x9F\x90\x8B');
        define('RAM','\xF0\x9F\x90\x8F');
        define('GOAT','\xF0\x9F\x90\x90');
        define('ROOSTER','\xF0\x9F\x90\x93');
        define('DOG','\xF0\x9F\x90\x95');
        define('PIG','\xF0\x9F\x90\x96');
        define('DROMEDARY_CAMEL','\xF0\x9F\x90\xAA');
        define('BUSTS_IN_SILHOUETTE','\xF0\x9F\x91\xA5');
        define('TWO_MEN_HOLDING_HANDS','\xF0\x9F\x91\xAC');
        define('TWO_WOMEN_HOLDING_HANDS','\xF0\x9F\x91\xAD');
        define('THOUGHT_BALLOON','\xF0\x9F\x92\xAD');
        define('BANKNOTE_WITH_EURO_SIGN','\xF0\x9F\x92\xB6');
        define('BANKNOTE_WITH_POUND_SIGN','\xF0\x9F\x92\xB7');
        define('OPEN_MAILBOX_WITH_RAISED_FLAG','\xF0\x9F\x93\xAC');
        define('OPEN_MAILBOX_WITH_LOWERED_FLAG','\xF0\x9F\x93\xAD');
        define('POSTAL_HORN','\xF0\x9F\x93\xAF');
        define('NO_MOBILE_PHONES','\xF0\x9F\x93\xB5');
        define('TWISTED_RIGHTWARDS_ARROWS','\xF0\x9F\x94\x80');
        define('CLOCKWISE_RIGHTWARDS_AND_LEFTWARDS_OPEN_CIRCLE_ARROWS','\xF0\x9F\x94\x81');
        define('CLOCKWISE_RIGHTWARDS_AND_LEFTWARDS_OPEN_CIRCLE_ARROWS_WITH_CIRCLED_ONE_OVERLAY','\xF0\x9F\x94\x82');
        define('ANTICLOCKWISE_DOWNWARDS_AND_UPWARDS_OPEN_CIRCLE_ARROWS','\xF0\x9F\x94\x84');
        define('LOW_BRIGHTNESS_SYMBOL','\xF0\x9F\x94\x85');
        define('HIGH_BRIGHTNESS_SYMBOL','\xF0\x9F\x94\x86');
        define('SPEAKER_WITH_CANCELLATION_STROKE','\xF0\x9F\x94\x87');
        define('SPEAKER_WITH_ONE_SOUND_WAVE','\xF0\x9F\x94\x89');
        define('BELL_WITH_CANCELLATION_STROKE','\xF0\x9F\x94\x95');
        define('MICROSCOPE','\xF0\x9F\x94\xAC');
        define('TELESCOPE','\xF0\x9F\x94\xAD');
        define('CLOCK_FACE_ONE_THIRTY','\xF0\x9F\x95\x9C');
        define('CLOCK_FACE_TWO_THIRTY','\xF0\x9F\x95\x9D');
        define('CLOCK_FACE_THREE_THIRTY','\xF0\x9F\x95\x9E');
        define('CLOCK_FACE_FOUR_THIRTY','\xF0\x9F\x95\x9F');
        define('CLOCK_FACE_FIVE_THIRTY','\xF0\x9F\x95\xA0');
        define('CLOCK_FACE_SIX_THIRTY','\xF0\x9F\x95\xA1');
        define('CLOCK_FACE_SEVEN_THIRTY','\xF0\x9F\x95\xA2');
        define('CLOCK_FACE_EIGHT_THIRTY','\xF0\x9F\x95\xA3');
        define('CLOCK_FACE_NINE_THIRTY','\xF0\x9F\x95\xA4');
        define('CLOCK_FACE_TEN_THIRTY','\xF0\x9F\x95\xA5');
        define('CLOCK_FACE_ELEVEN_THIRTY','\xF0\x9F\x95\xA6');
        define('CLOCK_FACE_TWELVE_THIRTY','\xF0\x9F\x95\xA7');
    }
    
    public function realizarAccionesTest($message) {
        
        /*
         * Explicación progración:
         * En un fichero con el id del chat se guardan pares de variables con la siguiente estructura:
         * variable1=valor1;variable2=valor2
         * Se cargan en un array $estado de tal manera que:
         * $estado[variable1] = valor1
         * En estado se guardan los siguientes tipos de varibles:
         *      - p_idusuario : Guarda la puntuación del idusuario.
         *      - n_idusuario : Guarda el nombre del idusuario.
         *      - respuestacorrecta: Guarda la respuesta correcta de la pregunta en curso.
         */
        
        $chat_id = $message->getChat()->getId();
        //Nombre del fichero que guarda el estado del trivial.
        $file = $chat_id . ".txt";
        if ($this->esTest($chat_id)) {
            //Estamos en modo test, hay que leer el estado actual.
            $estado = array();
            $puntuaciones = array();
            
            //Se obtiene el contenido, el estado actual.
            $current = $this->obtenerContenidoFichero($chat_id);
            $arrValores = explode(";",$current);

            foreach ($arrValores as $variablevalor) {
                $arrVariableAct = explode("=",$variablevalor);
                $estado[$arrVariableAct[0]] = $arrVariableAct[1];
                if (strpos($arrVariableAct[0],'p_') > 0) {
                    //Es una variable de puntuacion
                    $puntuaciones[$arrVariableAct[0]] = $arrVariableAct[1];
                }
            }
            
            
            if (isset($estado['respuestacorrecta'])) {
                $respuestacorrecta = $estado['respuestacorrecta'];
            } else {
                $respuestacorrecta = '';
            }
                        
            
            $data = array();
            $data['chat_id'] = $chat_id;  
            
            
            
            
            //Comprobar si la respueta es correcta
            $comparacion = strcmp((string)strtoupper(trim($respuestacorrecta)) ,(string)strtoupper(trim($message->getText())));
            if ($comparacion == 0) {
                //Hay que comprobar quien ha sido el que ha acertado para sumar sus puntos.
                $message_id = $message->getMessageId();
                $data['reply_to_message_id'] = $message_id;
                $data['text'] = '¡Correcto! '.html_entity_decode(VICTORY_HAND).' Punto para ' . $message->getFrom()->getFirstName();
                //Suma de puntos
                $idUsuarioAcierto = $message->getFrom()->getId();
                if (!isset($estado['p_'.$idUsuarioAcierto])) {
                    $estado['p_'.$idUsuarioAcierto] = 0;
                }
                $estado['p_'.$idUsuarioAcierto]++;
                $puntuaciones['p_'.$idUsuarioAcierto] = $estado['p_'.$idUsuarioAcierto];
                
                //Para poder traducir los ids de usuario a los nombres hay que guardarlos en estado.
                //Se va guardando cada id-nombre de cada usuario según acierta preguntas.
                $estado['n_'.$idUsuarioAcierto] = $message->getFrom()->getFirstName();
                
                
                //Se deben mostrar todos los puntos ordenados por mayor puntuación.
                //Se ordenan las puntuaciones de mayor a menor                
                arsort($puntuaciones);
                $data['text'] .= "\n" .'Puntuaciones:';
                foreach ($puntuaciones as $usuario=>$puntuacion) {                    
                    $arrUsuario = explode("_",$usuario);
                    $idusuario = $arrUsuario[1];
                    $nombreUsuario = $estado['n_'.$idusuario];                        
                    $data['text'] .= "\n" .$nombreUsuario.':'.$puntuacion;
                }
                $data['text'] .= "\n" .'Resto de participantes sin puntos.';
                
                //Como esta ya se ha acertado, hay que obtener una pregunta aleatoria  
                
                if (!isset($estado['temaElegido'])) {
                    $data['text'] .= "\n" .'Ha ocurrido un problema al obtener la siguiente pregunta por que se ha perdido el tema seleccionado... se suspende el trivial actual.';
                    return $data;
                }
                
                $preguntaMostrar = $this->obtenerPreguntaAleatoria($estado['temaElegido']);
                if (!is_null($preguntaMostrar)) {
                    $data['text'] .= "\n" ."\n" ."\n" ."\n";
                    $data['text'] .= "\n" .$preguntaMostrar['pregunta'];
                    $estado['respuestacorrecta'] =  $preguntaMostrar['s'];
                    $estadotxt = '';
                    
                    //Se pone el array estado en el fichero de situación del trivial para este chatid
                    foreach($estado as $variable => $valor) {
                        if ($estadotxt != '') {
                            $estadotxt .=";";
                        }
                        $estadotxt .=$variable."=".$valor;
                    }                    
                    $this->crearFicheroTest($chat_id, $estadotxt);
                    //$data['text'] .= "\n" .'Guardado en fichero : ' . $estadotxt;
                    
                } else {
                    $data['text'] .= "\n" .'No se puede acceder a las preguntas para pregunta la siguiente.';  
                }
                return $data;
            } else {
                //No es correcto, no se responde nada y se sigue con la pregunta actual  
                
                $data['text'] = '¡Incorrecto! Inténtalo otra vez ' . $message->getFrom()->getFirstName();
                /*
                $data['text'] .= "\n" ."Contenido del fichero = " . $current;
                $data['text'] .= "\n" ."Comparando respuetacorrecta = " . strtoupper($respuestacorrecta) ." con respuesta enviada=". strtoupper($message->getText());
                $data['text'] .= "\n" ."TRIM Y la variable comparacion es " . $comparacion;                                
                 */
                return $data;
                
            }                                    
        } else {
            //No estamos en modo test.
            $data = array();
            $data['chat_id'] = $chat_id; 
            $data['reply_to_message_id'] = $message_id;
            $data['text'] = 'No existe el fichero de test ' . $file;
            return  $data;
        }
        
    }
    
    public function obtenerPreguntaAleatoria($tema) {
        $preguntaMostrar = array(); 
        $nombreFichero = BASE_PATH.'/'.$tema.'.txt';
        if (file_exists($nombreFichero)) {
            
            $preguntas = file($nombreFichero);
            $preguntaNumero = rand(0, count($preguntas)-1);      
            
            $pregunta = utf8_encode($preguntas[$preguntaNumero]);
            $separador1 = '«';
            $preguntaArr1 = explode($separador1,$pregunta);
            $separador2 = '*';
            $preguntaArr2 = explode($separador2,$preguntaArr1[1]);            
            return array('pregunta' => "Nº " . $preguntaNumero . " - " . $preguntaArr2[0], 's' => $preguntaArr2[1]);            
        } else {                   
            $preguntaMostrar['pregunta'] = 'No existe el fichero de preguntas ' . BASE_PATH.'/'.$tema.'.txt';
            $preguntaMostrar['s'] = 'oki';            
            return null;            
        }
    }
    
    public function esTest($chat_id) {
        $file = BASE_PATH."/".$chat_id.'.txt';        
        if (file_exists($file)) {
            return (filesize($file) > 0);
        } else {
            return false;
        }
    }
    
    public function crearFicheroTest($chat_id, $test) {
        $file = BASE_PATH."/".$chat_id.'.txt';        
        file_put_contents($file, $test);
    }
    
    public function obtenerContenidoFichero ($chat_id) {
        $file = BASE_PATH."/".$chat_id . ".txt";       
        if (file_exists($file)) {
                //Se obtiene el contenido, el estado actual.
                return file_get_contents($file);
        } else {
            return '';
        }
    }

    /**
     * Devuelve los temas sobre los que se puede preguntar
     * Corresponden a los ficheros que se encuentran en el directorio de preguntas
     * @return type array
     */
    public function obtenerTemas() {
        
        $temas = array();
        
        if ($handle = opendir(BASE_PATH)) {
            while (false !== ($file = readdir($handle)))
            {
                if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'txt')
                {
                    //Comprobar si es un txt de estado. Si lo es su parte de nombre sería numérica.
                    $arrFichero = explode(".", $file);
                    if (!is_numeric($arrFichero[0])) {
                        $temas[] .= $arrFichero[0];
                    }
                }
            }
            closedir($handle);
        } 
        
        return $temas;
        
    }

    public function existeTema($tema) {
        return file_exists(BASE_PATH."/".$tema.".txt");
    }
    
}
