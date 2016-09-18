[![Build Status](https://semaphoreci.com/api/v1/limonte/mcafee-siteadvisor/branches/master/badge.svg)](https://semaphoreci.com/limonte/mcafee-siteadvisor)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/limonte/mcafee-siteadvisor/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/limonte/mcafee-siteadvisor/?branch=master)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE)

# McAfee SiteAdvisor PHP library, check if link is suspicious

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
