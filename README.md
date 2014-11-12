# php-emoji - Process Emoji in PHP and display them as HTML

This is a PHP library for dealing with mobile device Emoji.

You can read more about it and see a demo here:<br>
<a href="http://code.iamcal.com/php/emoji/">http://code.iamcal.com/php/emoji/</a>

It is based on a Ruby library here:<br>
<a href="http://www.bitcontrol.org/2009/10/18/emoji-rubygem-for-iphone-softbank-ntt-docomo-kddi/">http://www.bitcontrol.org/2009/10/18/emoji-rubygem-for-iphone-softbank-ntt-docomo-kddi/</a>

And data from Unicode here:<br>
<a href="http://www.unicode.org/~scherer/emoji4unicode/snapshot/full.html">http://www.unicode.org/~scherer/emoji4unicode/snapshot/full.html</a>

**Important note:** As of iOS 6, the iPhone uses unified codepoints. You no longer need to do any conversion at input/output time, unless
you want to convert it to HTML for viewing on PCs, Android phones, older Macs, etc.


## USAGE

    <?php
        include('emoji.php');

        $emoji = new Emoji;

    #
    # functions to convert incoming data into the unified format
    #

    $data = $emoji->emojiDocomoToUnified(       $text);
    $data = $emoji->emojiKddiToUnified(         $text);
    $data = $emoji->emojiSoftbankToUnified(     $text);
    $data = $emoji->emojiGoogleToUnified(       $text);
    $data = $emoji->emojiHtmlToUnified(         $text);

    #
    # functions to convert unified data into an outgoing format
    #

    $data = $emoji->emojiUnifiedToDocomo(       $text);
    $data = $emoji->emojiUnifiedToKddi(         $text);
    $data = $emoji->emojiUnifiedToSoftbank(     $text);
    $data = $emoji->emojiUnifiedToGoogle(       $text);
    $data = $emoji->emojiUnifiedToHtml(         $text);

    $data = $emoji->emojiConvert(               $text, $map);
    $data = $emoji->emojiGetName(               $unified_cp);

    ?>

When using the HTML format, you'll also need to include the <code>emoji.css</code> file, which points
to the <code>emoji.png</code> image. These images come from the <a href="https://github.com/github/gemoji">gemoji</a>
project and cover all current codepoints, except U+1F320, Shooting Star.

IMPORTANT NOTE: This library currently only deals with UTF-8. If your source data is JIS
or Shift-JIS, you're out of luck for the moment.

## CREDITS

By Cal Henderson <cal@iamcal.com>

Parser rewrite based on a fork by <a href="https://github.com/dulao5">&#26460;&#24535;&#21018;</a>
Generator rewrite by Benjamin De Almeida or Ant3iros https://github.com/Ant3iros

This work is dual-licensed under the GPL v3 and the MIT license.

Image copyrights: https://github.com/github/gemoji/blob/master/LICENSE

Version 1 released on 2009-10-20
