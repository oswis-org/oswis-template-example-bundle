<?php
/**
 * @noinspection PhpUnused
 */

namespace Zakjakub\OswisTemplateExampleBundle\Form\MediaObjects;

use Zakjakub\OswisCoreBundle\Form\AbstractClass\AbstractImageType;
use Zakjakub\OswisTemplateExampleBundle\Entity\MediaObject\TemplateImage;

final class TemplateImageType extends AbstractImageType
{
    public function getBlockPrefix(): string
    {
        return 'template_example_template_image';
    }

    public static function getImageClassName(): string
    {
        return TemplateImage::class;
    }
}
