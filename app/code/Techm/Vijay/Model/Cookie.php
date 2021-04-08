<?php

class Cookie
{
    /**
     * @var \Magento\Framework\Stdlib\CookieManagerInterface CookieManagerInterface
     */
    private $cookieManager;

    /**
     * @var \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory CookieMetadataFactory
     */
    private $cookieMetadataFactory;

    public function __construct(
        \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager,
        \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory
    ) {
        $this->cookieManager = $cookieManager;
        $this->cookieMetadataFactory = $cookieMetadataFactory;
    }

    /** Set Custom Cookie using Magento 2 */
    public function setCustomCookie()
    {
        $publicCookieMetadata = $this->cookieMetadataFactory->createPublicCookieMetadata();
        $publicCookieMetadata->setDurationOneYear();
        $publicCookieMetadata->setPath('/');
        $publicCookieMetadata->setHttpOnly(false);

        return $this->cookieManager->setPublicCookie(
            'magento2cookie',
            'Custom_Cookie_Value',
            $publicCookieMetadata
        );
    }

    /** Get Custom Cookie using */
    public function getCustomCookie()
    {
        return $this->cookieManager->getCookie(
            'magento2cookie'
        );
    }
}