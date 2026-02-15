<?php

namespace App\Helpers;

class ChordHelper
{
    private static function getEnharmonicImagePath($nota)
    {
        $enharmonico = [
            'c#' => 'd_flat',
            'db' => 'd_flat',
            'd#' => 'e_flat',
            'eb' => 'e_flat',
            'f#' => 'g_flat',
            'gb' => 'g_flat',
            'g#' => 'a_flat',
            'ab' => 'a_flat',
            'a#' => 'b_flat',
            'bb' => 'b_flat',
        ];

        // Normalizar la nota a minúsculas y mapearla al nombre de archivo correspondiente
        $notaBase = strtolower($nota);

        return $enharmonico[$notaBase] ?? $notaBase; // Si no hay mapeo, usar la nota original
    }

    private static function getMinorChordImagePath($nota)
    {
        $notaMinorMap = [
            'c' => 'cm',
            'c#' => 'd_flat_m',
            'db' => 'd_flat_m',
            'd' => 'dm',
            'd#' => 'e_flat_m',
            'eb' => 'e_flat_m',
            'e' => 'em',
            'f' => 'fm',
            'f#' => 'g_flat_m',
            'gb' => 'g_flat_m',
            'g' => 'gm',
            'g#' => 'a_flat_m',
            'ab' => 'a_flat_m',
            'a' => 'am',
            'a#' => 'b_flat_m',
            'bb' => 'b_flat_m',
            'b' => 'bm',
        ];

        return $notaMinorMap[$nota] ?? "{$nota}m";
    }

    private static function getSeventhChordImagePath($nota)
    {
        $notaSeptimaMap = [
            'c' => 'c7',
            'c#' => 'd_flat_7',
            'db' => 'd_flat_7',
            'd' => 'd7',
            'd#' => 'e_flat_7',
            'eb' => 'e_flat_7',
            'e' => 'e7',
            'f' => 'f7',
            'f#' => 'g_flat_7',
            'gb' => 'g_flat_7',
            'g' => 'g7',
            'g#' => 'a_flat_7',
            'ab' => 'a_flat_7',
            'a' => 'a7',
            'a#' => 'b_flat_7',
            'bb' => 'b_flat_7',
            'b' => 'b7',
        ];

        return $notaSeptimaMap[$nota] ?? "{$nota}7";
    }

    private static function getMinorSeventhChordImagePath($nota)
    {
        $notaMenorSeptimaMap = [
            'c' => 'cm7',
            'c#' => 'd_flat_m7',
            'db' => 'd_flat_m7',
            'd' => 'dm7',
            'd#' => 'e_flat_m7',
            'eb' => 'e_flat_m7',
            'e' => 'em7',
            'f' => 'fm7',
            'f#' => 'g_flat_m7',
            'gb' => 'g_flat_m7',
            'g' => 'gm7',
            'g#' => 'a_flat_m7',
            'ab' => 'a_flat_m7',
            'a' => 'am7',
            'a#' => 'b_flat_m7',
            'bb' => 'b_flat_m7',
            'b' => 'bm7',
        ];

        return $notaMenorSeptimaMap[$nota] ?? "{$nota}m7";
    }

    private static function getSeventhMajorChordImagePath($nota)
    {
        $notaSeptimaMajorMap = [
            'c' => 'cmaj7',
            'c#' => 'd_flat_maj7',
            'db' => 'd_flat_maj7',
            'd' => 'dmaj7',
            'd#' => 'e_flat_maj7',
            'eb' => 'e_flat_maj7',
            'e' => 'emaj7',
            'f' => 'fmaj7',
            'f#' => 'g_flat_maj7',
            'gb' => 'g_flat_maj7',
            'g' => 'gmaj7',
            'g#' => 'a_flat_maj7',
            'ab' => 'a_flat_maj7',
            'a' => 'amaj7',
            'a#' => 'b_flat_maj7',
            'bb' => 'b_flat_maj7',
            'b' => 'bmaj7',
        ];

        return $notaSeptimaMajorMap[$nota] ?? "{$nota}maj7";
    }

    private static function getMinorSeventhMajorChordImagePath($nota)
    {
        $notaMinorSeptimaMajorMap = [
            'c' => 'cmmaj7',
            'c#' => 'd_flat_mmaj7',
            'db' => 'd_flat_mmaj7',
            'd' => 'dmmaj7',
            'd#' => 'e_flat_mmaj7',
            'eb' => 'e_flat_mmaj7',
            'e' => 'emmaj7',
            'f' => 'fmmaj7',
            'f#' => 'g_flat_mmaj7',
            'gb' => 'g_flat_mmaj7',
            'g' => 'gmmaj7',
            'g#' => 'a_flat_mmaj7',
            'ab' => 'a_flat_mmaj7',
            'a' => 'ammaj7',
            'a#' => 'b_flat_mmaj7',
            'bb' => 'b_flat_mmaj7',
            'b' => 'bmmaj7',
        ];

        return $notaMinorSeptimaMajorMap[$nota] ?? "{$nota}mmaj7";
    }

    private static function getMinorNinthMajorChordImagePath($nota)
    {
        $notaMinorNinthMap = [
            'c' => 'cmmaj9',
            'c#' => 'd_flat_mmaj9',
            'db' => 'd_flat_mmaj9',
            'd' => 'dmmaj9',
            'd#' => 'e_flat_mmaj9',
            'eb' => 'e_flat_mmaj9',
            'e' => 'emmaj9',
            'f' => 'fmmaj9',
            'f#' => 'g_flat_mmaj9',
            'gb' => 'g_flat_mmaj9',
            'g' => 'gmmaj9',
            'g#' => 'a_flat_mmaj9',
            'ab' => 'a_flat_mmaj9',
            'a' => 'ammaj9',
            'a#' => 'b_flat_mmaj9',
            'bb' => 'b_flat_mmaj9',
            'b' => 'bmmaj9',
        ];

        return $notaMinorNinthMap[$nota] ?? "{$nota}mmaj9";
    }

    private static function getSixthChordImagePath($nota)
    {
        $notaSixthMap = [
            'c' => 'c6',
            'c#' => 'd_flat_6',
            'db' => 'd_flat_6',
            'd' => 'd6',
            'd#' => 'e_flat_6',
            'eb' => 'e_flat_6',
            'e' => 'e6',
            'f' => 'f6',
            'f#' => 'g_flat_6',
            'gb' => 'g_flat_6',
            'g' => 'g6',
            'g#' => 'a_flat_6',
            'ab' => 'a_flat_6',
            'a' => 'a6',
            'a#' => 'b_flat_6',
            'bb' => 'b_flat_6',
            'b' => 'b6',
        ];

        return $notaSixthMap[$nota] ?? "{$nota}6";
    }

    private static function getMinorSixthChordImagePath($nota)
    {
        $notaMinorSixthMap = [
            'c' => 'cm6',
            'c#' => 'd_flat_m6',
            'db' => 'd_flat_m6',
            'd' => 'dm6',
            'd#' => 'e_flat_m6',
            'eb' => 'e_flat_m6',
            'e' => 'em6',
            'f' => 'fm6',
            'f#' => 'g_flat_m6',
            'gb' => 'g_flat_m6',
            'g' => 'gm6',
            'g#' => 'a_flat_m6',
            'ab' => 'a_flat_m6',
            'a' => 'am6',
            'a#' => 'b_flat_m6',
            'bb' => 'b_flat_m6',
            'b' => 'bm6',
        ];

        return $notaMinorSixthMap[$nota] ?? "{$nota}m6";
    }

    private static function getSixthNinthChordImagePath($nota)
    {
        $notaSixthNinthMap = [
            'c' => 'c6_9',
            'c#' => 'd_flat_6_9',
            'db' => 'd_flat_6_9',
            'd' => 'd6_9',
            'd#' => 'e_flat_6_9',
            'eb' => 'e_flat_6_9',
            'e' => 'e6_9',
            'f' => 'f6_9',
            'f#' => 'g_flat_6_9',
            'gb' => 'g_flat_6_9',
            'g' => 'g6_9',
            'g#' => 'a_flat_6_9',
            'ab' => 'a_flat_6_9',
            'a' => 'a6_9',
            'a#' => 'b_flat_6_9',
            'bb' => 'b_flat_6_9',
            'b' => 'b6_9',
        ];

        return $notaSixthNinthMap[$nota] ?? "{$nota}6_9";
    }

    private static function getMinorSixthNinthChordImagePath($nota)
    {
        $notaMinorSixthNinthMap = [
            'c' => 'cm6_9',
            'c#' => 'd_flat_m6_9',
            'db' => 'd_flat_m6_9',
            'd' => 'dm6_9',
            'd#' => 'e_flat_m6_9',
            'eb' => 'e_flat_m6_9',
            'e' => 'em6_9',
            'f' => 'fm6_9',
            'f#' => 'g_flat_m6_9',
            'gb' => 'g_flat_m6_9',
            'g' => 'gm6_9',
            'g#' => 'a_flat_m6_9',
            'ab' => 'a_flat_m6_9',
            'a' => 'am6_9',
            'a#' => 'b_flat_m6_9',
            'bb' => 'b_flat_m6_9',
            'b' => 'bm6_9',
        ];

        return $notaMinorSixthNinthMap[$nota] ?? "{$nota}m6_9";
    }

    private static function getFifthChordImagePath($nota)
    {
        $notaFifthMap = [
            'c' => 'c5',
            'c#' => 'd_flat_5',
            'db' => 'd_flat_5',
            'd' => 'd5',
            'd#' => 'e_flat_5',
            'eb' => 'e_flat_5',
            'e' => 'e5',
            'f' => 'f5',
            'f#' => 'g_flat_5',
            'gb' => 'g_flat_5',
            'g' => 'g5',
            'g#' => 'a_flat_5',
            'ab' => 'a_flat_5',
            'a' => 'a5',
            'a#' => 'b_flat_5',
            'bb' => 'b_flat_5',
            'b' => 'b5',
        ];

        return $notaFifthMap[$nota] ?? "{$nota}5";
    }

    private static function getNinthChordImagePath($nota)
    {
        $notaNinthMap = [
            'c' => 'c9',
            'c#' => 'd_flat_9',
            'db' => 'd_flat_9',
            'd' => 'd9',
            'd#' => 'e_flat_9',
            'eb' => 'e_flat_9',
            'e' => 'e9',
            'f' => 'f9',
            'f#' => 'g_flat_9',
            'gb' => 'g_flat_9',
            'g' => 'g9',
            'g#' => 'a_flat_9',
            'ab' => 'a_flat_9',
            'a' => 'a9',
            'a#' => 'b_flat_9',
            'bb' => 'b_flat_9',
            'b' => 'b9',
        ];

        return $notaNinthMap[$nota] ?? "{$nota}9";
    }

    private static function getNinthMajorChordImagePath($nota)
    {
        $notaNinthMajorMap = [
            'c' => 'cmaj9',
            'c#' => 'd_flat_maj9',
            'db' => 'd_flat_maj9',
            'd' => 'dmaj9',
            'd#' => 'e_flat_maj9',
            'eb' => 'e_flat_maj9',
            'e' => 'emaj9',
            'f' => 'fmaj9',
            'f#' => 'g_flat_maj9',
            'gb' => 'g_flat_maj9',
            'g' => 'gmaj9',
            'g#' => 'a_flat_maj9',
            'ab' => 'a_flat_maj9',
            'a' => 'amaj9',
            'a#' => 'b_flat_maj9',
            'bb' => 'b_flat_maj9',
            'b' => 'bmaj9',
        ];

        return $notaNinthMajorMap[$nota] ?? "{$nota}maj9";
    }

    private static function getMinorNinthChordImagePath($nota)
    {
        $notaMinorNinthMap = [
            'c' => 'cm9',
            'c#' => 'd_flat_m9',
            'db' => 'd_flat_m9',
            'd' => 'dm9',
            'd#' => 'e_flat_m9',
            'eb' => 'e_flat_m9',
            'e' => 'em9',
            'f' => 'fm9',
            'f#' => 'g_flat_m9',
            'gb' => 'g_flat_m9',
            'g' => 'gm9',
            'g#' => 'a_flat_m9',
            'ab' => 'a_flat_m9',
            'a' => 'am9',
            'a#' => 'b_flat_m9',
            'bb' => 'b_flat_m9',
            'b' => 'bm9',
        ];

        return $notaMinorNinthMap[$nota] ?? "{$nota}m9";
    }

    private static function getEleventhChordImagePath($nota)
    {
        $notaEleventhMap = [
            'c' => 'c11',
            'c#' => 'd_flat_11',
            'db' => 'd_flat_11',
            'd' => 'd11',
            'd#' => 'e_flat_11',
            'eb' => 'e_flat_11',
            'e' => 'e11',
            'f' => 'f11',
            'f#' => 'g_flat_11',
            'gb' => 'g_flat_11',
            'g' => 'g11',
            'g#' => 'a_flat_11',
            'ab' => 'a_flat_11',
            'a' => 'a11',
            'a#' => 'b_flat_11',
            'bb' => 'b_flat_11',
            'b' => 'b11',
        ];

        return $notaEleventhMap[$nota] ?? "{$nota}11";
    }

    private static function getMinorEleventhChordImagePath($nota)
    {
        $notaMinorEleventhMap = [
            'c' => 'cm11',
            'c#' => 'd_flat_m11',
            'db' => 'd_flat_m11',
            'd' => 'dm11',
            'd#' => 'e_flat_m11',
            'eb' => 'e_flat_m11',
            'e' => 'em11',
            'f' => 'fm11',
            'f#' => 'g_flat_m11',
            'gb' => 'g_flat_m11',
            'g' => 'gm11',
            'g#' => 'a_flat_m11',
            'ab' => 'a_flat_m11',
            'a' => 'am11',
            'a#' => 'b_flat_m11',
            'bb' => 'b_flat_m11',
            'b' => 'bm11',
        ];

        return $notaMinorEleventhMap[$nota] ?? "{$nota}m11";
    }

    private static function getEleventhMajorChordImagePath($nota)
    {
        $notaEleventhMajorMap = [
            'c' => 'cmaj11',
            'c#' => 'd_flat_maj11',
            'db' => 'd_flat_maj11',
            'd' => 'dmaj11',
            'd#' => 'e_flat_maj11',
            'eb' => 'e_flat_maj11',
            'e' => 'emaj11',
            'f' => 'fmaj11',
            'f#' => 'g_flat_maj11',
            'gb' => 'g_flat_maj11',
            'g' => 'gmaj11',
            'g#' => 'a_flat_maj11',
            'ab' => 'a_flat_maj11',
            'a' => 'amaj11',
            'a#' => 'b_flat_maj11',
            'bb' => 'b_flat_maj11',
            'b' => 'bmaj11',
        ];

        return $notaEleventhMajorMap[$nota] ?? "{$nota}maj11";
    }

    private static function getThirteenthChordImagePath($nota)
    {
        $notaThirteenthMap = [
            'c' => 'c13',
            'c#' => 'd_flat_13',
            'db' => 'd_flat_13',
            'd' => 'd13',
            'd#' => 'e_flat_13',
            'eb' => 'e_flat_13',
            'e' => 'e13',
            'f' => 'f13',
            'f#' => 'g_flat_13',
            'gb' => 'g_flat_13',
            'g' => 'g13',
            'g#' => 'a_flat_13',
            'ab' => 'a_flat_13',
            'a' => 'a13',
            'a#' => 'b_flat_13',
            'bb' => 'b_flat_13',
            'b' => 'b13',
        ];

        return $notaThirteenthMap[$nota] ?? "{$nota}13";
    }

    private static function getMinorThirteenthChordImagePath($nota)
    {
        $notaMinorThirteenthMap = [
            'c' => 'cm13',
            'c#' => 'd_flat_m13',
            'db' => 'd_flat_m13',
            'd' => 'dm13',
            'd#' => 'e_flat_m13',
            'eb' => 'e_flat_m13',
            'e' => 'em13',
            'f' => 'fm13',
            'f#' => 'g_flat_m13',
            'gb' => 'g_flat_m13',
            'g' => 'gm13',
            'g#' => 'a_flat_m13',
            'ab' => 'a_flat_m13',
            'a' => 'am13',
            'a#' => 'b_flat_m13',
            'bb' => 'b_flat_m13',
            'b' => 'bm13',
        ];

        return $notaMinorThirteenthMap[$nota] ?? "{$nota}m13";
    }

    private static function getThirteenthMajorChordImagePath($nota)
    {
        $notaThirteenthMajorMap = [
            'c' => 'cmaj13',
            'c#' => 'd_flat_maj13',
            'db' => 'd_flat_maj13',
            'd' => 'dmaj13',
            'd#' => 'e_flat_maj13',
            'eb' => 'e_flat_maj13',
            'e' => 'emaj13',
            'f' => 'fmaj13',
            'f#' => 'g_flat_maj13',
            'gb' => 'g_flat_maj13',
            'g' => 'gmaj13',
            'g#' => 'a_flat_maj13',
            'ab' => 'a_flat_maj13',
            'a' => 'amaj13',
            'a#' => 'b_flat_maj13',
            'bb' => 'b_flat_maj13',
            'b' => 'bmaj13',
        ];

        return $notaThirteenthMajorMap[$nota] ?? "{$nota}maj13";
    }

    private static function getAddTwoChordImagePath($nota)
    {
        $notaAddTwoMap = [
            'c' => 'cadd2',
            'c#' => 'd_flat_add2',
            'db' => 'd_flat_add2',
            'd' => 'dadd2',
            'd#' => 'e_flat_add2',
            'eb' => 'e_flat_add2',
            'e' => 'eadd2',
            'f' => 'fadd2',
            'f#' => 'g_flat_add2',
            'gb' => 'g_flat_add2',
            'g' => 'gadd2',
            'g#' => 'a_flat_add2',
            'ab' => 'a_flat_add2',
            'a' => 'aadd2',
            'a#' => 'b_flat_add2',
            'bb' => 'b_flat_add2',
            'b' => 'badd2',
        ];

        return $notaAddTwoMap[$nota] ?? "{$nota}add2";
    }

    private static function getAddFourthChordImagePath($nota)
    {
        $notaAddFourthMap = [
            'c' => 'cadd4',
            'c#' => 'd_flat_add4',
            'db' => 'd_flat_add4',
            'd' => 'dadd4',
            'd#' => 'e_flat_add4',
            'eb' => 'e_flat_add4',
            'e' => 'eadd4',
            'f' => 'fadd4',
            'f#' => 'g_flat_add4',
            'gb' => 'g_flat_add4',
            'g' => 'gadd4',
            'g#' => 'a_flat_add4',
            'ab' => 'a_flat_add4',
            'a' => 'aadd4',
            'a#' => 'b_flat_add4',
            'bb' => 'b_flat_add4',
            'b' => 'badd4',
        ];

        return $notaAddFourthMap[$nota] ?? "{$nota}add4";
    }

    private static function getAddNinethChordImagePath($nota)
    {
        $notaAddNinethMap = [
            'c' => 'cadd9',
            'c#' => 'd_flat_add9',
            'db' => 'd_flat_add9',
            'd' => 'dadd9',
            'd#' => 'e_flat_add9',
            'eb' => 'e_flat_add9',
            'e' => 'eadd9',
            'f' => 'fadd9',
            'f#' => 'g_flat_add9',
            'gb' => 'g_flat_add9',
            'g' => 'gadd9',
            'g#' => 'a_flat_add9',
            'ab' => 'a_flat_add9',
            'a' => 'aadd9',
            'a#' => 'b_flat_add9',
            'bb' => 'b_flat_add9',
            'b' => 'badd9',
        ];

        return $notaAddNinethMap[$nota] ?? "{$nota}add9";
    }

    private static function getAddEleventhChordImagePath($nota)
    {
        $notaAddEleventhMap = [
            'c' => 'cadd11',
            'c#' => 'd_flat_add11',
            'db' => 'd_flat_add11',
            'd' => 'dadd11',
            'd#' => 'e_flat_add11',
            'eb' => 'e_flat_add11',
            'e' => 'eadd11',
            'f' => 'fadd11',
            'f#' => 'g_flat_add11',
            'gb' => 'g_flat_add11',
            'g' => 'gadd11',
            'g#' => 'a_flat_add11',
            'ab' => 'a_flat_add11',
            'a' => 'aadd11',
            'a#' => 'b_flat_add11',
            'bb' => 'b_flat_add11',
            'b' => 'badd11',
        ];

        return $notaAddEleventhMap[$nota] ?? "{$nota}add11";
    }

    private static function getSeventhMinusFifthChordImagePath($nota)
    {
        $notaSeventhMinusFifthMap = [
            'c' => 'c7minus5',
            'c#' => 'd_flat_7minus5',
            'db' => 'd_flat_7minus5',
            'd' => 'd7minus5',
            'd#' => 'e_flat_7minus5',
            'eb' => 'e_flat_7minus5',
            'e' => 'e7minus5',
            'f' => 'f7minus5',
            'f#' => 'g_flat_7minus5',
            'gb' => 'g_flat_7minus5',
            'g' => 'g7minus5',
            'g#' => 'a_flat_7minus5',
            'ab' => 'a_flat_7minus5',
            'a' => 'a7minus5',
            'a#' => 'b_flat_7minus5',
            'bb' => 'b_flat_7minus5',
            'b' => 'b7minus5',
        ];

        return $notaSeventhMinusFifthMap[$nota] ?? "{$nota}7-5";
    }

    private static function getSeventhPlusFifthChordImagePath($nota)
    {
        $notaSeventhPlusFifthMap = [
            'c' => 'c7plus5',
            'c#' => 'd_flat_7plus5',
            'db' => 'd_flat_7plus5',
            'd' => 'd7plus5',
            'd#' => 'e_flat_7plus5',
            'eb' => 'e_flat_7plus5',
            'e' => 'e7plus5',
            'f' => 'f7plus5',
            'f#' => 'g_flat_7plus5',
            'gb' => 'g_flat_7plus5',
            'g' => 'g7plus5',
            'g#' => 'a_flat_7plus5',
            'ab' => 'a_flat_7plus5',
            'a' => 'a7plus5',
            'a#' => 'b_flat_7plus5',
            'bb' => 'b_flat_7plus5',
            'b' => 'b7plus5',
        ];

        return $notaSeventhPlusFifthMap[$nota] ?? "{$nota}7+5";
    }

    private static function getSusTwoChordImagePath($nota)
    {
        $notaSusTwoMap = [
            'c' => 'csus2',
            'c#' => 'd_flat_sus2',
            'db' => 'd_flat_sus2',
            'd' => 'dsus2',
            'd#' => 'e_flat_sus2',
            'eb' => 'e_flat_sus2',
            'e' => 'esus2',
            'f' => 'fadd2',
            'f#' => 'g_flat_sus2',
            'gb' => 'g_flat_sus2',
            'g' => 'gsus2',
            'g#' => 'a_flat_sus2',
            'ab' => 'a_flat_sus2',
            'a' => 'asus2',
            'a#' => 'b_flat_sus2',
            'bb' => 'b_flat_sus2',
            'b' => 'bsus2',
        ];

        return $notaSusTwoMap[$nota] ?? "{$nota}sus2";
    }

    private static function getSusFourthChordImagePath($nota)
    {
        $notaSusFourthMap = [
            'c' => 'csus4',
            'c#' => 'd_flat_sus4',
            'db' => 'd_flat_sus4',
            'd' => 'dsus4',
            'd#' => 'e_flat_sus4',
            'eb' => 'e_flat_sus4',
            'e' => 'esus4',
            'f' => 'fsus4',
            'f#' => 'g_flat_sus4',
            'gb' => 'g_flat_sus4',
            'g' => 'gsus4',
            'g#' => 'a_flat_sus4',
            'ab' => 'a_flat_sus4',
            'a' => 'asus4',
            'a#' => 'b_flat_sus4',
            'bb' => 'b_flat_sus4',
            'b' => 'bsus4',
        ];

        return $notaSusFourthMap[$nota] ?? "{$nota}sus4";
    }

    private static function getSeventhSusFourthChordImagePath($nota)
    {
        $notaSeventhSusFourthMap = [
            'c' => 'c7sus4',
            'c#' => 'd_flat_7sus4',
            'db' => 'd_flat_7sus4',
            'd' => 'd7sus4',
            'd#' => 'e_flat_7sus4',
            'eb' => 'e_flat_7sus4',
            'e' => 'e7sus4',
            'f' => 'f7sus4',
            'f#' => 'g_flat_7sus4',
            'gb' => 'g_flat_7sus4',
            'g' => 'g7sus4',
            'g#' => 'a_flat_7sus4',
            'ab' => 'a_flat_7sus4',
            'a' => 'a7sus4',
            'a#' => 'b_flat_7sus4',
            'bb' => 'b_flat_7sus4',
            'b' => 'b7sus4',
        ];

        return $notaSeventhSusFourthMap[$nota] ?? "{$nota}7sus4";
    }

    private static function getNinthSusFourthChordImagePath($nota)
    {
        $notaNinthSusFourthMap = [
            'c' => 'c9sus4',
            'c#' => 'd_flat_9sus4',
            'db' => 'd_flat_9sus4',
            'd' => 'd9sus4',
            'd#' => 'e_flat_9sus4',
            'eb' => 'e_flat_9sus4',
            'e' => 'e9sus4',
            'f' => 'f9sus4',
            'f#' => 'g_flat_9sus4',
            'gb' => 'g_flat_9sus4',
            'g' => 'g9sus4',
            'g#' => 'a_flat_9sus4',
            'ab' => 'a_flat_9sus4',
            'a' => 'a9sus4',
            'a#' => 'b_flat_9sus4',
            'bb' => 'b_flat_9sus4',
            'b' => 'b9sus4',
        ];

        return $notaNinthSusFourthMap[$nota] ?? "{$nota}9sus4";
    }

    private static function getDiminishedChordImagePath($nota)
    {
        $notaDiminishedMap = [
            'c' => 'cdim',
            'c#' => 'd_flat_dim',
            'db' => 'd_flat_dim',
            'd' => 'ddim',
            'd#' => 'e_flat_dim',
            'eb' => 'e_flat_dim',
            'e' => 'edim',
            'f' => 'fm',
            'f#' => 'g_flat_dim',
            'gb' => 'g_flat_dim',
            'g' => 'gdim',
            'g#' => 'a_flat_dim',
            'ab' => 'a_flat_dim',
            'a' => 'adim',
            'a#' => 'b_flat_dim',
            'bb' => 'b_flat_dim',
            'b' => 'bdim',
        ];

        return $notaDiminishedMap[$nota] ?? "{$nota}dim";
    }

    private static function getDiminishedSeventhChordImagePath($nota)
    {
        $notaDiminishedSeventhMap = [
            'c' => 'cdim7',
            'c#' => 'd_flat_dim7',
            'db' => 'd_flat_dim7',
            'd' => 'ddim7',
            'd#' => 'e_flat_dim7',
            'eb' => 'e_flat_dim7',
            'e' => 'edim7',
            'f' => 'fdim7',
            'f#' => 'g_flat_dim7',
            'gb' => 'g_flat_dim7',
            'g' => 'gdim7',
            'g#' => 'a_flat_dim7',
            'ab' => 'a_flat_dim7',
            'a' => 'adim7',
            'a#' => 'b_flat_dim7',
            'bb' => 'b_flat_dim7',
            'b' => 'bdim7',
        ];

        return $notaDiminishedSeventhMap[$nota] ?? "{$nota}dim7";
    }

    private static function getMinorSeventhBemolFifthChordImagePath($nota)
    {
        $notaMinorSeventhBemolFifthMap = [
            'c' => 'cm7b5',
            'c#' => 'd_flat_m7b5',
            'db' => 'd_flat_m7b5',
            'd' => 'dm7b5',
            'd#' => 'e_flat_m7b5',
            'eb' => 'e_flat_m7b5',
            'e' => 'em7b5',
            'f' => 'fm7b5',
            'f#' => 'g_flat_m7b5',
            'gb' => 'g_flat_m7b5',
            'g' => 'gm7b5',
            'g#' => 'a_flat_m7b5',
            'ab' => 'a_flat_m7b5',
            'a' => 'am7b5',
            'a#' => 'b_flat_m7b5',
            'bb' => 'b_flat_m7b5',
            'b' => 'bm7b5',
        ];

        return $notaMinorSeventhBemolFifthMap[$nota] ?? "{$nota}m7b5";
    }

    private static function getAugmentedChordImagePath($nota)
    {
        $notaAugmentedMap = [
            'c' => 'caug',
            'c#' => 'd_flat_aug',
            'db' => 'd_flat_aug',
            'd' => 'daug',
            'd#' => 'e_flat_aug',
            'eb' => 'e_flat_aug',
            'e' => 'eaug',
            'f' => 'faug',
            'f#' => 'g_flat_aug',
            'gb' => 'g_flat_aug',
            'g' => 'gaug',
            'g#' => 'a_flat_aug',
            'ab' => 'a_flat_aug',
            'a' => 'aaug',
            'a#' => 'b_flat_aug',
            'bb' => 'b_flat_aug',
            'b' => 'baug',
        ];

        return $notaAugmentedMap[$nota] ?? "{$nota}aug";
    }

    private static function getAugmentedSeventhChordImagePath($nota)
    {
        $notaAugmentedSeventhMap = [
            'c' => 'caug7',
            'c#' => 'd_flat_aug7',
            'db' => 'd_flat_aug7',
            'd' => 'daug7',
            'd#' => 'e_flat_aug7',
            'eb' => 'e_flat_aug7',
            'e' => 'eaug7',
            'f' => 'faug7',
            'f#' => 'g_flat_aug7',
            'gb' => 'g_flat_aug7',
            'g' => 'gaug7',
            'g#' => 'a_flat_aug7',
            'ab' => 'a_flat_aug7',
            'a' => 'aaug7',
            'a#' => 'b_flat_aug7',
            'bb' => 'b_flat_aug7',
            'b' => 'baug7',
        ];

        return $notaAugmentedSeventhMap[$nota] ?? "{$nota}aug7";
    }

    public static function getVariacionData($nota, $variacion)
    {
        $variaciones = [
            'maj' => [
                'nombre' => strtoupper($nota).' Mayor',
                'descripcion' => 'Acorde mayor para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getEnharmonicImagePath($nota).'.png'),
                'teoria' => 'El acorde de "'.strtoupper($nota).' Mayor" se construye con una raíz, una tercera mayor y una quinta perfecta.',
                'explicacion' => 'El acorde "'.strtoupper($nota).' Mayor" es una tríada, lo que significa que consta de tres notas. En la imagen del teclado, puedes ver las tres notas del acorde mayor marcadas en color rojo.',
                'digitaciones' => [
                    'izquierda_number' => '5-3-1',
                    'derecha_number' => '1-3-5',
                    'izquierda_letter' => 'Meñique, dedo medio, pulgar',
                    'derecha_letter' => 'Pulgar, dedo medio, meñique',
                    'izquierda_imagen' => 'lh_531.png',
                    'derecha_imagen' => 'rh_135.png',
                ],
            ],
            'min' => [
                'nombre' => strtoupper($nota).' menor',
                'descripcion' => 'Acorde menor para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getMinorChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de "'.strtoupper($nota).' menor" se construye con una raíz, una tercera mayor y una quinta perfecta.',
                'explicacion' => 'El acorde "'.strtoupper($nota).' menor" es una tríada, lo que significa que consta de tres notas. En la imagen del teclado, puedes ver las tres notas del acorde mayor marcadas en color rojo.',
                'digitaciones' => [
                    'izquierda_number' => '5-3-1',
                    'derecha_number' => '1-3-5',
                    'izquierda_letter' => 'Meñique, dedo medio, pulgar',
                    'derecha_letter' => 'Pulgar, dedo medio, meñique',
                    'izquierda_imagen' => 'lh_531.png',
                    'derecha_imagen' => 'rh_135.png',
                ],
            ],
            '7' => [
                'nombre' => strtoupper($nota).' séptima (dominante)',
                'descripcion' => 'Acorde séptima (dominante) para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getSeventhChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).'7 se construye con una raíz, una tercera mayor, una quinta perfecta y una séptima menor.',
                'explicacion' => 'El acorde '.strtoupper($nota).' séptima es un acorde dominante de cuatro notas. Puedes ver las cuatro notas del acorde '.strtoupper($nota).' séptima marcadas en color rojo. El acorde a menudo se abrevia como '.strtoupper($nota).'7.',
                'omisiones' => [
                    strtoupper($nota).'7(no3)' => strtoupper($nota).' - '.strtoupper($nota).'5 - '.strtoupper($nota).'7',
                    strtoupper($nota).'7(no5)' => strtoupper($nota).' - '.strtoupper($nota).'3 - '.strtoupper($nota).'7',
                ],
                'digitaciones' => [
                    'izquierda_number' => '5-3-2-1',
                    'derecha_number' => '1-2-3-5',
                    'izquierda_letter' => 'Meñique, dedo medio, índice, pulgar',
                    'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                    'izquierda_imagen' => 'lh_5321.png',
                    'derecha_imagen' => 'rh_1235.png',
                ],
            ],
            'm7' => [
                'nombre' => strtoupper($nota).' menor Séptima',
                'descripcion' => 'Acorde menor séptima para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getMinorSeventhChordImagePath($nota).'.png'),
                'teoria' => 'El acorde "'.strtoupper($nota).' menor séptima" se construye con una raíz, una tercera menor, una quinta perfecta y una séptima menor.',
                'explicacion' => 'El acorde "'.strtoupper($nota).' menor séptima" incluye cuatro notas. Las notas del acorde están marcadas en color rojo en el diagrama. El acorde se abrevia a menudo como "'.strtoupper($nota).'m7" (o alternativamente '.strtoupper($nota).'min7).',
                'digitaciones' => [
                    'izquierda_number' => '5-3-2-1',
                    'derecha_number' => '1-2-3-5',
                    'izquierda_letter' => 'Meñique, dedo medio, índice, pulgar',
                    'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                    'izquierda_imagen' => 'lh_5321.png',
                    'derecha_imagen' => 'rh_1235.png',
                ],
            ],
            'maj7' => [
                'nombre' => strtoupper($nota).' Séptima Mayor',
                'descripcion' => 'Acorde de séptima mayor para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getSeventhMajorChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de "'.strtoupper($nota).' séptima mayor" se construye con una raíz, una tercera mayor, una quinta perfecta y una séptima mayor.',
                'explicacion' => 'El acorde "'.strtoupper($nota).' séptima mayor" es un acorde de cuatro notas. Puedes ver las cuatro notas marcadas en color rojo en el diagrama. El acorde se abrevia a menudo como "'.strtoupper($nota).'maj7".',
                'digitaciones' => [
                    'izquierda_number' => '5-3-2-1',
                    'derecha_number' => '1-2-3-5',
                    'izquierda_letter' => 'Meñique, dedo medio, índice, pulgar',
                    'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                    'izquierda_imagen' => 'lh_5321.png',
                    'derecha_imagen' => 'rh_1235.png',
                ],
            ],
            'mmaj7' => [
                'nombre' => strtoupper($nota).' menor séptima mayor',
                'descripcion' => 'Acorde menor séptima mayor para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getMinorSeventhMajorChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).' menor séptima mayor se construye con una raíz, una tercera menor, una quinta pefecta y una séptima mayor. Comparte características tanto de la séptima menor como de la séptima mayor.',
                'explicacion' => 'El '.strtoupper($nota).' menor séptima mayor es un acorde de cuatro notas. Puedes ver las cuatro notas marcadas en color rojo en el diagrama. El acorde tiene varias abreviaturas, incluyendo '.strtoupper($nota).'mMaj7, '.strtoupper($nota).'m(M7) y '.strtoupper($nota).'minmaj7.',
                'digitaciones' => [
                    //
                ],
                'subvariaciones' => [
                    'mmaj7' => [
                        'imagen' => asset('backend/assets/images/'.self::getMinorSeventhMajorChordImagePath($nota).'.png'),
                        'descripcion' => 'Añadida la segunda nota a la tríada base.',
                        'digitaciones' => [
                            'izquierda_number' => '5-4-3-1',
                            'derecha_number' => '1-2-3-5',
                            'izquierda_letter' => 'Meñique, anular, dedo medio, pulgar',
                            'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                            'izquierda_imagen' => 'lh_5431.png',
                            'derecha_imagen' => 'rh_1235.png',
                        ],
                    ],
                    'mmaj9' => [
                        'imagen' => asset('backend/assets/images/'.self::getMinorNinthMajorChordImagePath($nota).'.png'),
                        'descripcion' => 'Añadida la segunda nota a la tríada base.',
                        'digitaciones' => [
                            'izquierda_number' => '5-4-3-1',
                            'derecha_number' => '1-2-3-5',
                            'izquierda_letter' => 'Meñique, anular, dedo medio, pulgar',
                            'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                            'izquierda_imagen' => 'lh_5431.png',
                            'derecha_imagen' => 'rh_1235.png',
                        ],
                    ],
                ],
            ],
            '6' => [
                'nombre' => strtoupper($nota).' sexta mayor',
                'descripcion' => 'Acorde sexta mayor para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getSixthChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).'sexta mayor se construye con una raíz, una tercera mayor, una quinta perfecta y una sexta mayor.',
                'explicacion' => 'El '.strtoupper($nota).'sexta mayor es un acorde de cuatro notas. Puedes ver las cuatro notas marcadas en color rojo en el diagrama. El acorde se abrevia como '.strtoupper($nota).'6.',
                'digitaciones' => [
                    'izquierda_number' => '5-3-2-1',
                    'derecha_number' => '1-2-3-4',
                    'izquierda_letter' => 'Meñique, dedo medio, índice, pulgar',
                    'derecha_letter' => 'Pulgar, índice, dedo medio, anular',
                    'izquierda_imagen' => 'lh_5321.png',
                    'derecha_imagen' => 'rh_1234.png',
                ],
            ],
            'm6' => [
                'nombre' => strtoupper($nota).' sexta menor',
                'descripcion' => 'Acorde sexta menor para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getMinorSixthChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).'sexta menor se construye con una raíz, una tercera menor, una quinta pefecta y una sexta mayor.',
                'explicacion' => 'El '.strtoupper($nota).'sexta menor es un acorde de cuatro notas. Puedes ver las cuatro notas marcadas en color rojo en el diagrama. El acorde se abrevia como '.strtoupper($nota).'m6 (alternativamente '.strtoupper($nota).'min6).',
                'digitaciones' => [
                    'izquierda_number' => '5-3-2-1',
                    'derecha_number' => '1-2-3-4',
                    'izquierda_letter' => 'Meñique, dedo medio, índice, pulgar',
                    'derecha_letter' => 'Pulgar, índice, dedo medio, anular',
                    'izquierda_imagen' => 'lh_5321.png',
                    'derecha_imagen' => 'rh_1234.png',
                ],
            ],
            '6-9' => [
                'nombre' => strtoupper($nota).' sexta/novena',
                'descripcion' => 'Acorde sexta/novena para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getSixthNinthChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).'sexta/novena se construye con una raíz, una tercera mayor, una quinta perfecta, una sexta mayor y una novena mayor. Esto da al acorde la fórmula 1 - 3 - 5 - 6 - 9.',
                'explicacion' => 'El '.strtoupper($nota).'sexta/novena es un acorde de cinco notas. Sin embargo, debido a circunstancias prácticas, la quinta ('.strtoupper($nota).'5) a menudo se omite y/o el acorde se toca invertido. El acorde se abrevia como '.strtoupper($nota).'6/9. También se puede escribir como '.strtoupper($nota).'6add9 o '.strtoupper($nota).'maj6add9.',
                'digitaciones' => [
                    //  Añade las digitaciones aquí si las tienes disponibles
                ],
                'subvariaciones' => [
                    '6-9' => [
                        'imagen' => asset('backend/assets/images/'.self::getSixthNinthChordImagePath($nota).'.png'),
                        'descripcion' => 'Añadida la segunda nota a la tríada base.',
                        'digitaciones' => [
                            'izquierda_number' => '5-4-3-1',
                            'derecha_number' => '1-2-3-5',
                            'izquierda_letter' => 'Meñique, anular, dedo medio, pulgar',
                            'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                            'izquierda_imagen' => 'lh_5431.png',
                            'derecha_imagen' => 'rh_1235.png',
                        ],
                    ],
                    'm6-9' => [
                        'imagen' => asset('backend/assets/images/'.self::getMinorSixthNinthChordImagePath($nota).'.png'),
                        'descripcion' => 'Añadida la segunda nota a la tríada base.',
                        'digitaciones' => [
                            'izquierda_number' => '5-4-3-1',
                            'derecha_number' => '1-2-3-5',
                            'izquierda_letter' => 'Meñique, anular, dedo medio, pulgar',
                            'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                            'izquierda_imagen' => 'lh_5431.png',
                            'derecha_imagen' => 'rh_1235.png',
                        ],
                    ],
                ],
            ],
            '5' => [
                'nombre' => strtoupper($nota).' quinta',
                'descripcion' => 'Acorde quinta para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getFifthChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).'quinta se construye con una raíz y una quinta. Es común incluir también la primera nota una octava arriba.',
                'explicacion' => 'El '.strtoupper($nota).'quinta es un acorde de dos notas (ya que no incluye una tercera, no es un acorde mayor ni menor). El acorde se abrevia como '.strtoupper($nota).'5.',
                'digitaciones' => [
                    'izquierda_number' => '5-1',
                    'derecha_number' => '1-5',
                    'izquierda_letter' => 'Meñique, pulgar',
                    'derecha_letter' => 'Pulgar,  meñique',
                    'izquierda_imagen' => 'lh_51.png',
                    'derecha_imagen' => 'rh_15.png',
                ],
            ],
            '9' => [
                'nombre' => strtoupper($nota).' novena',
                'descripcion' => 'Acorde novena para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getNinthChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).' novena se construye con una raíz, una tercera mayor, una quinta perfecta, una séptima menor y una novena mayor.',
                'explicacion' => 'El acorde de '.strtoupper($nota).' novena es un acorde de cinco notas. Sin embargo, debido a circunstancias prácticas, la quinta ('.strtoupper($nota).'5) a menudo se omite y/o el acorde se toca invertido. El acorde a menudo se abrevia como '.strtoupper($nota).'9.',
                'omisiones' => [
                    strtoupper($nota).'9(no3)' => strtoupper($nota).' - '.strtoupper($nota).'5 - '.strtoupper($nota).'b7 - '.strtoupper($nota).'9',
                    strtoupper($nota).'9(no5)' => strtoupper($nota).' - '.strtoupper($nota).'3 - '.strtoupper($nota).'b7 - '.strtoupper($nota).'9',
                ],
                'digitaciones' => [
                    //  Añade las digitaciones aquí si las tienes disponibles
                ],
            ],
            'm9' => [
                'nombre' => strtoupper($nota).' novena menor',
                'descripcion' => 'Acorde novena menor para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getMinorNinthChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).' novena menor se construye con una raíz, una tercera menor, una quinta perfecta, una séptima menor y una novena mayor.',
                'explicacion' => 'El acorde de '.strtoupper($nota).'novena menor es un acorde de cinco notas. Por razones prácticas, el acorde normalmente se toca con notas omitidas y/o invertido. El acorde a menudo se abrevia como '.strtoupper($nota).'m9 (alternativamente '.strtoupper($nota).'min9).',
                'omisiones' => [
                    strtoupper($nota).'m9(no3)' => strtoupper($nota).' - '.strtoupper($nota).'5 - '.strtoupper($nota).'b7 - '.strtoupper($nota).'9',
                    strtoupper($nota).'m9(no5)' => strtoupper($nota).' - '.strtoupper($nota).'b3 - '.strtoupper($nota).'b7 - '.strtoupper($nota).'9',
                ],
                'digitaciones' => [
                    //  Añade las digitaciones aquí si las tienes disponibles
                ],
            ],
            'maj9' => [
                'nombre' => strtoupper($nota).' novena mayor',
                'descripcion' => 'Acorde novena mayor para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getNinthMajorChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).'maj9 se construye con una raíz, una tercera mayor, una quinta justa, una séptima mayor y una novena mayor.',
                'explicacion' => 'El '.strtoupper($nota).'maj9 es un acorde de cinco notas y puede considerarse como un '.strtoupper($nota).'maj7 con una novena añadida. A menudo se abrevia como '.strtoupper($nota).'maj9 (no confundir con '.strtoupper($nota).'9).',
                'omisiones' => [
                    strtoupper($nota).'maj9(no3)' => strtoupper($nota).' - '.strtoupper($nota).'5 - '.strtoupper($nota).'7 - '.strtoupper($nota).'9',
                    strtoupper($nota).'maj9(no5)' => strtoupper($nota).' - '.strtoupper($nota).'3 - '.strtoupper($nota).'7 - '.strtoupper($nota).'9',
                ],
                'digitaciones' => [
                    //  Añade las digitaciones aquí si las tienes disponibles
                ],
            ],
            '11' => [
                'nombre' => strtoupper($nota).' onceava',
                'descripcion' => 'Acorde onceava para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getEleventhChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).' onceava se construye añadiendo una tercera a un acorde de novena.',
                'explicacion' => 'El acorde '.strtoupper($nota).' onceava es un acorde de seis notas. Para evitar la disonancia, la tercera ('.strtoupper($nota).'3) normalmente se omite. El acorde también se suele tocar invertido. El acorde se abrevia como '.strtoupper($nota).'11.',
                'omisiones' => [
                    strtoupper($nota).'11(no3)' => strtoupper($nota).' - '.strtoupper($nota).'5 - '.strtoupper($nota).'b7 - '.strtoupper($nota).'9 - '.strtoupper($nota).'11',
                    strtoupper($nota).'11(no9)' => strtoupper($nota).' - '.strtoupper($nota).'3 - '.strtoupper($nota).'5 - '.strtoupper($nota).'b7 - '.strtoupper($nota).'11',
                ],
                'digitaciones' => [
                    //  Añade las digitaciones aquí si las tienes disponibles
                ],
            ],
            'm11' => [
                'nombre' => strtoupper($nota).' onceava menor',
                'descripcion' => 'Acorde onceava menor para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getMinorEleventhChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).' onceava menor se construye añadiendo una tercera a un acorde de novena menor.',
                'explicacion' => 'El acorde '.strtoupper($nota).'onceava menor es un acorde de seis notas. Por razones prácticas, el acorde normalmente se toca con notas omitidas y/o invertido. El acorde a menudo se abrevia como '.strtoupper($nota).'m11 (alternativamente '.strtoupper($nota).'min11).',
                'omisiones' => [
                    strtoupper($nota).'m11(no3)' => strtoupper($nota).' - '.strtoupper($nota).'5 - '.strtoupper($nota).'b7 - '.strtoupper($nota).'9 - '.strtoupper($nota).'11',
                    strtoupper($nota).'m11(no9)' => strtoupper($nota).' - '.strtoupper($nota).'b3 - '.strtoupper($nota).'5 - '.strtoupper($nota).'b7 - '.strtoupper($nota).'11',
                ],
                'digitaciones' => [
                    //  Añade las digitaciones aquí si las tienes disponibles
                ],
            ],
            'maj11' => [
                'nombre' => strtoupper($nota).' onceava mayor',
                'descripcion' => 'Acorde onceava mayor para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getEleventhMajorChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).' onceava mayor se construye extendiendo el acorde de novena mayor con una nota onceava mayor.',
                'explicacion' => 'El acorde'.strtoupper($nota).' onceava mayor es un acorde de seis notas. Por razones prácticas, el acorde normalmente se toca con notas omitidas y/o invertido. A menudo se abrevia como '.strtoupper($nota).'maj11 o '.strtoupper($nota).'maj9(#11). En este último caso, el acorde se toca con una onceava aumentada para evitar la disonancia con la tercera.',
                'omisiones' => [
                    strtoupper($nota).'maj11(no5)' => strtoupper($nota).' - '.strtoupper($nota).'3 - '.strtoupper($nota).'7 - '.strtoupper($nota).'9 - '.strtoupper($nota).'11',
                ],
                'digitaciones' => [
                    //  Añade las digitaciones aquí si las tienes disponibles
                ],
            ],
            '13' => [
                'nombre' => strtoupper($nota).' treceava',
                'descripcion' => 'Acorde treceava para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getThirteenthChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).' treceava se construye añadiendo una tercera a un acorde de onceava.',
                'explicacion' => 'El acorde '.strtoupper($nota).' treceava es un acorde de siete notas. Debido a circunstancias prácticas, algunas notas (como sugerencia, la quinta, la novena y la onceava) se omiten y el acorde se toca invertido. El acorde a veces se toca con ambas manos. El acorde a menudo se abrevia como '.strtoupper($nota).'13.',
                'omisiones' => [
                    strtoupper($nota).'13(no3)' => strtoupper($nota).' - '.strtoupper($nota).'5 - '.strtoupper($nota).'b7 - '.strtoupper($nota).'9 - '.strtoupper($nota).'11 - '.strtoupper($nota).'13',
                    strtoupper($nota).'13(no5)' => strtoupper($nota).' - '.strtoupper($nota).'3 - '.strtoupper($nota).'b7 - '.strtoupper($nota).'9 - '.strtoupper($nota).'11 - '.strtoupper($nota).'13',
                ],
                'digitaciones' => [
                    //  Añade las digitaciones aquí si las tienes disponibles
                ],
            ],
            'm13' => [
                'nombre' => strtoupper($nota).' treceava menor',
                'descripcion' => 'Acorde treceava menor para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getMinorThirteenthChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).' treceava menor se construye extendiendo el acorde de onceava menor con una nota 13 mayor.',
                'explicacion' => 'El acorde '.strtoupper($nota).' treceava menor es un acorde de siete notas. Por razones prácticas, el acorde normalmente se toca con notas omitidas y/o invertido. El acorde a menudo se abrevia como '.strtoupper($nota).'m13 (alternativamente '.strtoupper($nota).'min13).',
                'omisiones' => [
                    strtoupper($nota).'m13(no11)' => strtoupper($nota).' - '.strtoupper($nota).'b3 - '.strtoupper($nota).'5 - '.strtoupper($nota).'b7 - '.strtoupper($nota).'9 - '.strtoupper($nota).'13',
                ],
                'digitaciones' => [
                    //  Añade las digitaciones aquí si las tienes disponibles
                ],
            ],
            'maj13' => [
                'nombre' => strtoupper($nota).' treceava mayor',
                'descripcion' => 'Acorde treceava mayor para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getThirteenthMajorChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).' treceava mayor se construye extendiendo el acorde de onceava mayor con una nota treceava mayor.',
                'explicacion' => 'El acorde '.strtoupper($nota).' treceava mayor es un acorde de seis notas (la 11, '.strtoupper($nota).'4 en el caso de '.strtoupper($nota).'maj13, normalmente se excluye). Por razones prácticas, el acorde normalmente se toca con notas omitidas y/o invertido. A menudo se abrevia como '.strtoupper($nota).'maj13 (no confundir con '.strtoupper($nota).'13).',
                'omisiones' => [
                    strtoupper($nota).'maj13(no5)' => strtoupper($nota).' - '.strtoupper($nota).'3 - '.strtoupper($nota).'7 - '.strtoupper($nota).'9 - '.strtoupper($nota).'13',
                    strtoupper($nota).'maj13(no9)' => strtoupper($nota).' - '.strtoupper($nota).'3 - '.strtoupper($nota).'5 - '.strtoupper($nota).'7 - '.strtoupper($nota).'13',
                ],
                'digitaciones' => [
                    //  Añade las digitaciones aquí si las tienes disponibles
                ],
            ],
            'add' => [
                'nombre' => strtoupper($nota).' Añadido',
                'descripcion' => 'Acorde con notas añadidas para la nota '.strtoupper($nota),
                'imagen' => asset("backend/assets/images/{$nota}add.png"),
                'teoria' => 'El acorde "'.strtoupper($nota).' añadido" se construye agregando una nota específica (2, 4, 9 o 11) a la tríada base.',
                'explicacion' => 'El acorde "'.strtoupper($nota).' añadido" incluye tres notas base más una nota adicional. Puedes ver las notas marcadas en rojo en el diagrama.',
                'digitaciones' => [
                    //  Añade las digitaciones aquí si las tienes disponibles
                ],
                'subvariaciones' => [
                    'add2' => [
                        'imagen' => asset('backend/assets/images/'.self::getAddTwoChordImagePath($nota).'.png'),
                        'descripcion' => 'Añadida la segunda nota a la tríada base.',
                        'digitaciones' => [
                            'izquierda_number' => '5-4-3-1',
                            'derecha_number' => '1-2-3-5',
                            'izquierda_letter' => 'Meñique, anular, dedo medio, pulgar',
                            'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                            'izquierda_imagen' => 'lh_5431.png',
                            'derecha_imagen' => 'rh_1235.png',
                        ],
                    ],
                    'add4' => [
                        'imagen' => asset('backend/assets/images/'.self::getAddFourthChordImagePath($nota).'.png'),
                        'descripcion' => 'Añadida la cuarta nota a la tríada base.',
                        'digitaciones' => [
                            'izquierda_number' => '5-3-2-1',
                            'derecha_number' => '1-3-4-5',
                            'izquierda_letter' => 'Meñique, dedo medio, índice, pulgar',
                            'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                            'izquierda_imagen' => 'lh_5321.png',
                            'derecha_imagen' => 'rh_1235.png',
                        ],
                    ],
                    'add9' => [
                        'imagen' => asset('backend/assets/images/'.self::getAddNinethChordImagePath($nota).'.png'),
                        'descripcion' => 'Añadida la novena nota a la tríada base.',
                        'digitaciones' => [
                            'izquierda_number' => '5-3-2-1',
                            'derecha_number' => '1-2-3-5',
                            'izquierda_letter' => 'Meñique, dedo medio, índice, pulgar',
                            'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                            'izquierda_imagen' => 'lh_5321.png',
                            'derecha_imagen' => 'rh_1235.png',
                        ],
                    ],
                    'add11' => [
                        'imagen' => asset('backend/assets/images/'.self::getAddEleventhChordImagePath($nota).'.png'),
                        'descripcion' => 'Añadida la undécima nota a la tríada base.',
                        'digitaciones' => [
                            'izquierda_number' => '5-3-2-1',
                            'derecha_number' => '1-2-3-5',
                            'izquierda_letter' => 'Meñique, dedo medio, índice, pulgar',
                            'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                            'izquierda_imagen' => 'lh_5321.png',
                            'derecha_imagen' => 'rh_1235.png',
                        ],
                    ],
                ],
            ],
            '7-5' => [
                'nombre' => strtoupper($nota).'7-5 ('.strtoupper($nota).'7b5)',
                'descripcion' => 'Acorde alterado séptima bemol quinta para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getSeventhMinusFifthChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).' séptima bemol quinta es idéntico al '.strtoupper($nota).'7 excepto que el quinto tono de la escala (es decir, el tercer tono en el acorde) se bemoliza.',
                'explicacion' => 'El '.strtoupper($nota).'7-5 (o '.strtoupper($nota).'7b5) altera el '.strtoupper($nota).'7 por el cambio de una nota. '.strtoupper($nota).'7-5 significa '.strtoupper($nota).' séptima menos quinta.',
                'digitaciones' => [
                    'izquierda_number' => '5-3-2-2',
                    'derecha_number' => '1-2-3-5',
                    'izquierda_letter' => 'Meñique, dedo medio, índice, pulgar',
                    'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                    'izquierda_imagen' => 'lh_5321.png',
                    'derecha_imagen' => 'rh_1235.png',
                ],
            ],
            '7+5' => [
                'nombre' => strtoupper($nota).'7+5 ('.strtoupper($nota).'7#5)',
                'descripcion' => 'Acorde alterado séptima aumentada para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getSeventhPlusFifthChordImagePath($nota).'.png'),
                'teoria' => 'Comparado con '.strtoupper($nota).' séptima, el tercer tono en el acorde se aumenta. Ten en cuenta que '.strtoupper($nota).' séptima aumentada es idéntico a '.strtoupper($nota).'aug7.',
                'explicacion' => 'El acorde '.strtoupper($nota).' séptima aumentada altera el '.strtoupper($nota).'7 por el cambio de una nota. '.strtoupper($nota).'7+5 significa '.strtoupper($nota).' séptima más quinta (también se puede escribir como '.strtoupper($nota).'7#5).',
                'digitaciones' => [
                    'izquierda_number' => '5-3-2-1',
                    'derecha_number' => '1-2-3-5',
                    'izquierda_letter' => 'Meñique, dedo medio, índice, pulgar',
                    'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                    'izquierda_imagen' => 'lh_5321.png',
                    'derecha_imagen' => 'rh_1235.png',
                ],
            ],
            'sus' => [
                'nombre' => strtoupper($nota).' Suspendido',
                'descripcion' => 'Acorde con notas suspendidas para la nota '.strtoupper($nota),
                // 'imagen' => asset("backend/assets/images/{$nota}add.png"),
                'teoria' => 'El acorde "'.strtoupper($nota).' suspendido" se construye alterando una nota específica (2, 4, 9 o 11) a la tríada base.',
                'explicacion' => 'El acorde "'.strtoupper($nota).' suspendido" puede incluir tres notas base más una nota adicional. Puedes ver las notas marcadas en rojo en el diagrama.',
                'digitaciones' => [
                    //  Añade las digitaciones aquí si las tienes disponibles
                ],
                'subvariaciones' => [
                    'sus2' => [
                        'nombre' => strtoupper($nota).'sus2',
                        'descripcion' => 'Acorde suspendido segunda para la nota '.strtoupper($nota),
                        'imagen' => asset('backend/assets/images/'.self::getSusTwoChordImagePath($nota).'.png'),
                        'teoria' => 'En este acorde, la tercera (la segunda nota en el acorde) se reemplaza con una segunda mayor.',
                        'explicacion' => 'El acorde '.strtoupper($nota).'sus2 es un acorde de tres notas. '.strtoupper($nota).'sus2 a veces se escribe como '.strtoupper($nota).'2.',
                        'digitaciones' => [
                            'izquierda_number' => '5-4-1',
                            'derecha_number' => '1-2-5',
                            'izquierda_letter' => 'Meñique, índice, pulgar',
                            'derecha_letter' => 'Pulgar, índice, meñique',
                            'izquierda_imagen' => 'lh_541.png',
                            'derecha_imagen' => 'rh_125.png',
                        ],
                    ],
                    'sus4' => [
                        'nombre' => strtoupper($nota).'sus4',
                        'descripcion' => 'Acorde suspendido cuarta para la nota '.strtoupper($nota),
                        'imagen' => asset('backend/assets/images/'.self::getSusFourthChordImagePath($nota).'.png'),
                        'teoria' => 'En este acorde, la tercera (la segunda nota en el acorde) se reemplaza con una cuarta justa.',
                        'explicacion' => 'El acorde '.strtoupper($nota).'sus4 es un acorde de tres notas.',
                        'digitaciones' => [
                            'izquierda_number' => '5-2-1',
                            'derecha_number' => '1-4-5',
                            'izquierda_letter' => 'Meñique, anular, pulgar',
                            'derecha_letter' => 'Pulgar, anular, meñique',
                            'izquierda_imagen' => 'lh_521.png',
                            'derecha_imagen' => 'rh_145.png',
                        ],
                    ],
                    '7sus4' => [
                        'nombre' => strtoupper($nota).'7sus4',
                        'descripcion' => 'Acorde séptima suspendida cuarta para la nota '.strtoupper($nota),
                        'imagen' => asset('backend/assets/images/'.self::getSeventhSusFourthChordImagePath($nota).'.png'),
                        'teoria' => 'El acorde '.strtoupper($nota).' séptima suspendida cuarta es un acorde de séptima suspendida con la tercera reemplazada por una cuarta perfecta.',
                        'explicacion' => 'El '.strtoupper($nota).' séptima suspendida cuarta es un acorde de cuatro notas (las cuatro notas están marcadas en rojo en el diagrama).',
                        'digitaciones' => [
                            'izquierda_number' => '5-3-2-1',
                            'derecha_number' => '1-2-3-5',
                            'izquierda_letter' => 'Meñique, dedo medio, índice, pulgar',
                            'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                            'izquierda_imagen' => 'lh_5321.png',
                            'derecha_imagen' => 'rh_1235.png',
                        ],
                    ],
                    '9sus4' => [
                        'nombre' => strtoupper($nota).'9sus4',
                        'descripcion' => 'Acorde novena suspendida cuarta para la nota '.strtoupper($nota),
                        'imagen' => asset('backend/assets/images/'.self::getNinthSusFourthChordImagePath($nota).'.png'),
                        'teoria' => 'El '.strtoupper($nota).' novena suspendida cuarta es un acorde de novena suspendida con la tercera reemplazada por una cuarta perfecta. '.strtoupper($nota).'9sus4 es lo mismo que '.strtoupper($nota).'11 sin la tercera mayor ('.strtoupper($nota).'3).',
                        'explicacion' => 'El '.strtoupper($nota).'9sus4 es un acorde de cinco notas (aunque a veces se omite la quinta).',
                        'digitaciones' => [
                            'izquierda_number' => '5-3-2-1',
                            'derecha_number' => '1-2-3-5',
                            'izquierda_letter' => 'Meñique, dedo medio, índice, pulgar',
                            'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                            'izquierda_imagen' => 'lh_5321.png',
                            'derecha_imagen' => 'rh_1235.png',
                        ],
                    ],
                ],
            ],
            'dim' => [
                'nombre' => strtoupper($nota).'dim ('.strtoupper($nota).'°)',
                'descripcion' => 'Acorde disminuido para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getDiminishedChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).' disminuido se construye con una raíz, una tercera menor y una quinta bemol.',
                'explicacion' => 'El acorde '.strtoupper($nota).' disminuido es un acorde de tres notas y puedes ver las notas marcadas en rojo. El acorde también se puede escribir como '.strtoupper($nota).'°.',
                'digitaciones' => [
                    'izquierda_number' => '5-3-2',
                    'derecha_number' => '1-3-5',
                    'izquierda_letter' => 'Meñique, dedo medio, índice',
                    'derecha_letter' => 'Pulgar, dedo medio, meñique',
                    'izquierda_imagen' => 'lh_532.png',
                    'derecha_imagen' => 'rh_135.png',
                ],
            ],
            'dim7' => [
                'nombre' => strtoupper($nota).'dim7 ('.strtoupper($nota).'°7)',
                'descripcion' => 'Acorde séptima disminuida para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getDiminishedSeventhChordImagePath($nota).'.png'),
                'teoria' => 'El acorde '.strtoupper($nota).' séptima disminuida es un acorde disminuido extendido con una tercera menor.',
                'explicacion' => 'El acorde '.strtoupper($nota).' séptima disminuida es un acorde de cuatro notas. '.strtoupper($nota).'dim7 también se puede escribir como '.strtoupper($nota).'°7.',
                'digitaciones' => [
                    'izquierda_number' => '5-3-2-1',
                    'derecha_number' => '1-2-3-5',
                    'izquierda_letter' => 'Meñique, dedo medio, índice, pulgar',
                    'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                    'izquierda_imagen' => 'lh_5321.png',
                    'derecha_imagen' => 'rh_1235.png',
                ],
            ],
            'm7b5' => [
                'nombre' => strtoupper($nota).'m7b5 ('.strtoupper($nota).' semidisminuido, '.strtoupper($nota).'ø)',
                'descripcion' => 'Acorde séptima menor bemol quinta para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getMinorSeventhBemolFifthChordImagePath($nota).'.png'),
                'teoria' => 'El acorde '.strtoupper($nota).'m7b5 es un '.strtoupper($nota).' séptima menor con una quinta bemol.',
                'explicacion' => 'El acorde '.strtoupper($nota).' séptima menor bemol quinta también se llama '.strtoupper($nota).' semidisminuido (también escrito como '.strtoupper($nota).'ø). El acorde se abrevia '.strtoupper($nota).'m7b5, '.strtoupper($nota).'m7(b5) o '.strtoupper($nota).'m7-b5.',
                'digitaciones' => [
                    'izquierda_number' => '5-3-2-1',
                    'derecha_number' => '1-2-3-5',
                    'izquierda_letter' => 'Meñique, dedo medio, índice, pulgar',
                    'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                    'izquierda_imagen' => 'lh_5321.png',
                    'derecha_imagen' => 'rh_1235.png',
                ],
            ],
            'aug' => [
                'nombre' => strtoupper($nota).'aug ('.strtoupper($nota).'+)',
                'descripcion' => 'Acorde aumentado para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getAugmentedChordImagePath($nota).'.png'),
                'teoria' => 'El acorde de '.strtoupper($nota).' aumentado se construye con una raíz, una tercera mayor y una quinta aumentada.',
                'explicacion' => 'El acrode '.strtoupper($nota).' aumentado es un acorde de tres notas, puedes ver las notas marcadas en rojo. El acorde también se puede escribir como '.strtoupper($nota).'+.',
                'digitaciones' => [
                    'izquierda_number' => '5-3-2',
                    'derecha_number' => '1-3-5',
                    'izquierda_letter' => 'Meñique, dedo medio, índice',
                    'derecha_letter' => 'Pulgar, dedo medio, meñique',
                    'izquierda_imagen' => 'lh_532.png',
                    'derecha_imagen' => 'rh_135.png',
                ],
            ],
            'aug7' => [
                'nombre' => strtoupper($nota).'aug7 ('.strtoupper($nota).'+7, '.strtoupper($nota).'7+, '.strtoupper($nota).'7#5)',
                'descripcion' => 'Acorde séptima aumentada para la nota '.strtoupper($nota),
                'imagen' => asset('backend/assets/images/'.self::getAugmentedSeventhChordImagePath($nota).'.png'),
                'teoria' => 'El acorde '.strtoupper($nota).' séptima aumentada es un acorde aumentado extendido con una séptima menor.',
                'explicacion' => 'El acorde '.strtoupper($nota).' séptima aumentada es un acorde de cuatro notas. '.strtoupper($nota).'aug7 también se puede escribir como '.strtoupper($nota).'+7, '.strtoupper($nota).'7+ o '.strtoupper($nota).'7#5. Ten en cuenta que '.strtoupper($nota).'aug7 es idéntico a '.strtoupper($nota).'7+5.',
                'digitaciones' => [
                    'izquierda_number' => '5-3-2-1',
                    'derecha_number' => '1-2-3-5',
                    'izquierda_letter' => 'Meñique, dedo medio, índice, pulgar',
                    'derecha_letter' => 'Pulgar, índice, dedo medio, meñique',
                    'izquierda_imagen' => 'lh_5321.png',
                    'derecha_imagen' => 'rh_1235.png',
                ],
            ],

        ];

        return $variaciones[$variacion] ?? [];
    }
}
