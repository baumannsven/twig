<?php

/**
 * Twig Integration for the Contao OpenSource CMS
 *
 * @package ContaoTwig
 * @link    https://github.com/bit3/contao-twig SCM
 * @link    http://de.contaowiki.org/Twig Wiki
 * @author  Tristan Lins <tristan.lins@bit3.de>
 * @author  Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Class TwigBackendModule
 *
 * A BackendModule implementation that use Twig as template engine.
 *
 * @package ContaoTwig
 * @author  Tristan Lins <tristan.lins@bit3.de>
 */
abstract class TwigBackendModule
    extends BackendModule
{
    /**
     * @var TwigBackendTemplate
     */
    protected $Template;

    /**
     * Parse the template
     *
     * @return string
     */
    public function generate()
    {
        $this->Template = new TwigBackendTemplate($this->strTemplate);
        $this->compile();

        return $this->Template->parse();
    }
}
