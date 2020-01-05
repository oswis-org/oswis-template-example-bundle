<?php

namespace Zakjakub\OswisTemplateExampleBundle\Controller\MediaObject;

use Zakjakub\OswisCoreBundle\Controller\AbstractClass\AbstractImageAction;
use Zakjakub\OswisCoreBundle\Entity\AbstractClass\AbstractImage;
use Zakjakub\OswisWebBundle\Entity\MediaObject\TemplateImage;

final class CreateTemplateImageAction extends AbstractImageAction
{
    public static function getImageClassName(): string
    {
        return TemplateImage::class;
    }

    public static function getImageNewInstance(): AbstractImage
    {
        return new TemplateImage();
    }
}
