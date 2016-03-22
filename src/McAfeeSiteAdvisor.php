<?php
namespace Limonte;

class McAfeeSiteAdvisor
{
    const OK = 0;
    const SUSPICIOUS = 301;

    const ENDPOINT = "https://www.siteadvisor.com/sites/";

    /**
     * @param string $url
     */
    public function check($url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL) === false) {
            throw new \Exception("Invalid URL");
        }

        $siteadvisor = @file_get_contents(self::ENDPOINT . $url);

        if (strpos($siteadvisor, 'Red Verdict Image')) {
            return self::SUSPICIOUS;
        }

        return self::OK;
    }
}
