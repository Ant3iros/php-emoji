    # public :

    #
    # functions to convert incoming data into the unified format
    #

    public function emojiDocomoToUnified(	$text){ return emojiConvert($text, 'docomo_to_unified'); }
    public function emojiKddiToUnified(		$text){ return emojiConvert($text, 'kddi_to_unified'); }
    public function emojiSoftbankToUnified(	$text){ return emojiConvert($text, 'softbank_to_unified'); }
    public function emojiGoogleToUnified(	$text){ return emojiConvert($text, 'google_to_unified'); }

    #
    # functions to convert unified data into an outgoing format
    #

    public function emojiUnifiedToDocomo(	$text){ return emojiConvert($text, 'unified_to_docomo'); }
    public function emojiUnifiedToKddi(		$text){ return emojiConvert($text, 'unified_to_kddi'); }
    public function emojiUnifiedToSoftbank(	$text){ return emojiConvert($text, 'unified_to_softbank'); }
    public function emojiUnifiedToGoogle(	$text){ return emojiConvert($text, 'unified_to_google'); }
    public function emojiUnifiedToHtml(		$text){ return emojiConvert($text, 'unified_to_html'); }
    public function emojiHtmlToUnified(		$text){ return emojiConvert($text, 'html_to_unified'); }

    public function emojiConvert($text, $map){
        return str_replace(array_keys($this->tab['emoji_maps'][$map]), $this->tab['emoji_maps'][$map], $text);
    }

    public function emojiGetName($unified_cp){
        return $this->tab['emoji_maps']['names'][$unified_cp] ? $this->tab['emoji_maps']['names'][$unified_cp] : '?';
    }

    public function __construct () {
        $tab['emoji_maps'] = $this->emojiMaps;
        $tab['emoji_maps']['html_to_unified'] = array_flip($tab['emoji_maps']['unified_to_html']);
    }
