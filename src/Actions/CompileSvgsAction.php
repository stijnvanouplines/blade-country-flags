<?php

namespace StijnVanouplines\BladeCountryFlags\Actions;

use DirectoryIterator;

class CompileSvgsAction
{
    /** @var string */
    private $svgStyle;
    /** @var string */
    private $svgDirectory;
    /** @var string */
    private $svgOutputDirectory;
    /** @var array */
    protected $replacePatterns = [
        '/\s(id=\"[a-zA-Z0-9-_]+\")/'           => '',
        '/\s(style=\"[a-z\s\-\\;:A-Z0-9_]+\")/' => '',
        '/\s(class=\"[a-zA-Z0-9]+\")/'          => '',
        // '/\s(height=\"[0-9]+\")/'               => '',
        // '/\s(width=\"[0-9]+\")/'                => '',
        '/\<\?xml.*\?\>/'                       => '',
    ];

    public function __construct(string $svgStyle, string $svgDirectory, string $svgOutputDirectory)
    {
        $this->svgStyle = $svgStyle;
        $this->svgDirectory = $svgDirectory;
        $this->svgOutputDirectory = $svgOutputDirectory;
    }

    public function execute(): void
    {
        foreach (new DirectoryIterator($this->svgDirectory) as $svg) {
            if (!$svg->isFile() || $svg->getExtension() !== 'svg') {
                continue;
            }

            /** @var string $svgContent */
            $svgContent = file_get_contents($svg->getPathname());
            $svgContent = preg_replace(array_keys($this->replacePatterns), array_values($this->replacePatterns), $svgContent);

            file_put_contents("{$this->svgOutputDirectory}/{$this->svgStyle}-{$svg->getFilename()}", $svgContent);
        }
    }
}
