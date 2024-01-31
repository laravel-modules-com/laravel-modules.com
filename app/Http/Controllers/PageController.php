<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use TOC\MarkupFixer;
use TOC\TocGenerator;

class PageController extends Controller
{
    public function page()
    {
        $docsPath = resource_path('docs');
        $requestedPath = resource_path('/').request()->path().'.md';
        $docsFilesPath = $docsPath.'/'.current_version();

        if (current_version() === null) {
            $versions = $this->versions($docsPath);
            $latest = $versions[0];

            return redirect("docs/$latest/introduction");
        }

        if (!file_exists($requestedPath)) {
            return redirect('/docs/'.current_version().'/introduction');
        }

        list($title, $body) = $this->getPageTitle($requestedPath);
        list($content, $toc) = $this->getToc($body);
        $versions = $this->versions($docsPath);
        $sidebar = Str::markdown(file_get_contents($docsFilesPath.'/_nav.md'));

        return view('page', compact('title', 'content', 'toc', 'versions', 'sidebar'));
    }

    protected function getPageTitle(string $filePath): array
    {
        $content = file_get_contents($filePath);
        $document = YamlFrontMatter::parse($content);
        $pageProperties = $document->matter();

        return [
            $pageProperties['title'] ?? '',
            $document->body()
        ];
    }

    protected function getToc(string $content): array
    {
        $markdown = Str::markdown($content);
        $markupFixer = new MarkupFixer();
        $tocGenerator = new TocGenerator();
        $content = $markupFixer->fix($markdown);
        $toc = $tocGenerator->getHtmlMenu($content);

        return [
            $content,
            $toc
        ];
    }

    protected function versions($path): array
    {
        $versions = [];
        foreach (glob($path.'/*', GLOB_ONLYDIR) as $dir) {
            $versions[] = basename($dir);
        }

        return $versions;
    }
}
