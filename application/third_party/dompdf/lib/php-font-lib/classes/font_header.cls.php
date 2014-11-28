<?php
/**
 * @package php-font-lib
 * @link    http://php-font-lib.googlecode.com/
 * @author  Fabien Ménager <fabien.menager@gmail.com>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 * @version $Id: font_header.cls.php 46 2012-04-02 20:22:38Z fabien.menager $
 */

/**
 * Font header container.
 *
 * @package php-font-lib
 */
abstract class Font_Header extends Font_Binary_Stream {
  /**
   * @var Font_TrueType
   */
  protected $font;
  protected $def = array();

  public $data;

  public function __construct(Font_TrueType $font) {
    $this->font = $font;
  }

  public function encode(){
    return $this->font->pack($this->def, $this->data);
  }

  public function parse(){
    $this->data = $this->font->unpack($this->def);
  }
}
