<?php
namespace App\Lib;

class Utils {
  public static function generateUUID() {
    return sprintf(
      '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
      mt_rand(0, 0xffff),
      mt_rand(0, 0xffff),
      mt_rand(0, 0xffff),
      mt_rand(0, 0x0fff) | 0x4000,
      mt_rand(0, 0x3fff) | 0x8000,
      mt_rand(0, 0xffff),
      mt_rand(0, 0xffff),
      mt_rand(0, 0xffff)
    );
  }

  public static function calculateReadTime($content) {
    $wordCount = str_word_count(strip_tags($content));
    $readTime = ceil($wordCount / 200);
    return $readTime;
  }

  public static function formatDate($date) {
    setlocale(LC_TIME, 'id_ID.UTF-8');
    return strftime('%d %B %Y', strtotime($date));
  }

  public static function limitWords($content, $limit) {
    $words = explode(" ", $content);
    $words = array_slice($words, 0, $limit);
    return implode(" ", $words) . "...";
  }
}