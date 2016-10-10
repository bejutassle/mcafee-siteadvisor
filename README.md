# McAfee SiteAdvisor PHP library, check if link is suspicious

[![Build Status](https://travis-ci.org/limonte/mcafee-siteadvisor.svg?branch=master)](https://travis-ci.org/limonte/mcafee-siteadvisor)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/limonte/mcafee-siteadvisor/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/limonte/mcafee-siteadvisor/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/limonte/mcafee-siteadvisor/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/limonte/mcafee-siteadvisor/?branch=master)

McAfee SiteAdvisor: [https://www.siteadvisor.com/](https://www.siteadvisor.com/)

## Usage:

```php
use Limonte\McAfeeSiteAdvisor as SiteAdvisor;

$siteAdvisorChecker = new SiteAdvisor;

$status = $siteAdvisorChecker->check($url);

if ($status === SiteAdvisor::OK) {
    // link is OK
}

if ($status === SiteAdvisor::SUSPICIOUS) {
    // link is suspicious - malware, spam or dangerous
}
```
