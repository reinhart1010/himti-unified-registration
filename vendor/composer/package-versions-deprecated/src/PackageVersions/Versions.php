<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'asm89/stack-cors' => 'v2.0.3@9cb795bf30988e8c96dd3c40623c48a877bc6714',
  'brick/math' => '0.9.2@dff976c2f3487d42c1db75a3b180e2b9f0e72ce0',
  'composer/package-versions-deprecated' => '1.11.99.3@fff576ac850c045158a250e7e27666e146e78d18',
  'doctrine/cache' => '1.11.0@a9c1b59eba5a08ca2770a76eddb88922f504e8e0',
  'doctrine/dbal' => '3.1.0@5ba62e7e40df119424866064faf2cef66cb5232a',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dragonmantank/cron-expression' => 'v3.1.0@7a8c6e56ab3ffcc538d05e8155bb42269abf1a0c',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'erusev/parsedown' => '1.7.4@cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
  'fideloper/proxy' => '4.4.1@c073b2bd04d1c90e04dc1b787662b558dd65ade0',
  'fruitcake/laravel-cors' => 'v2.0.4@a8ccedc7ca95189ead0e407c43b530dc17791d6a',
  'graham-campbell/result-type' => 'v1.0.1@7e279d2cd5d7fbb156ce46daada972355cea27bb',
  'guzzlehttp/guzzle' => '7.3.0@7008573787b430c1c1f650e3722d9bba59967628',
  'guzzlehttp/promises' => '1.4.1@8e7d04f1f6450fef59366c399cfad4b9383aa30d',
  'guzzlehttp/psr7' => '1.8.2@dc960a912984efb74d0a90222870c72c87f10c91',
  'laravel/framework' => 'v8.40.0@a654897ad7f97aea9d7ef292803939798c4a02a4',
  'laravel/tinker' => 'v2.6.1@04ad32c1a3328081097a181875733fa51f402083',
  'laravel/ui' => 'v3.2.1@e2478cd0342a92ec1c8c77422553bda8ee004fd0',
  'league/commonmark' => '1.6.0@19a9673b833cc37770439097b381d86cd125bfe8',
  'league/flysystem' => '1.1.4@f3ad69181b8afed2c9edf7be5a2918144ff4ea32',
  'league/mime-type-detection' => '1.7.0@3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'nesbot/carbon' => '2.47.0@606262fd8888b75317ba9461825a24fc34001e1e',
  'nikic/php-parser' => 'v4.12.0@6608f01670c3cc5079e18c1dab1104e002579143',
  'opis/closure' => '3.6.2@06e2ebd25f2869e54a306dda991f7db58066f7f6',
  'parsedown/laravel' => '1.2.1@c713ffe28c76730754389180e86e93e8e84087e7',
  'phpoption/phpoption' => '1.7.5@994ecccd8f3283ecf5ac33254543eb0ac946d525',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.8@e4573f47750dd6c92dca5aee543fa77513cbd8d3',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.1.3@28a5c4ab2f5111db6a60b2b4ec84057e0f43b9c1',
  'ramsey/uuid' => '4.1.1@cd4032040a750077205918c86049aa0f43d22947',
  'swiftmailer/swiftmailer' => 'v6.2.7@15f7faf8508e04471f666633addacf54c0ab5933',
  'symfony/console' => 'v5.3.7@8b1008344647462ae6ec57559da166c2bfa5e16a',
  'symfony/css-selector' => 'v5.2.7@59a684f5ac454f066ecbe6daecce6719aed283fb',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/error-handler' => 'v5.2.7@ea3ddbf67615e883ca7c33a4de61213789846782',
  'symfony/event-dispatcher' => 'v5.2.4@d08d6ec121a425897951900ab692b612a61d6240',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/finder' => 'v5.2.4@0d639a0943822626290d169965804f79400e6a04',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.2.7@a416487a73bb9c9d120e9ba3a60547f4a3fb7a1f',
  'symfony/http-kernel' => 'v5.2.7@1e9f6879f070f718e0055fbac232a56f67b8b6bd',
  'symfony/mime' => 'v5.2.7@7af452bf51c46f18da00feb32e1ad36db9426515',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-iconv' => 'v1.22.1@06fb361659649bcfd6a208a0f1fcaf4e827ad342',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-idn' => 'v1.22.1@2d63434d922daf7da8dd863e7907e67ee3031483',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php72' => 'v1.22.1@cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/process' => 'v5.2.7@98cb8eeb72e55d4196dd1e36f1f16e7b3a9a088e',
  'symfony/routing' => 'v5.2.7@3f0cab2e95b5e92226f34c2c1aa969d3fc41f48c',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/string' => 'v5.3.7@8d224396e28d30f81969f083a58763b8b9ceb0a5',
  'symfony/translation' => 'v5.2.7@e37ece5242564bceea54d709eafc948377ec9749',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/var-dumper' => 'v5.2.7@27cb9f7cfa3853c736425c7233a8f68814b19636',
  'tijsverkoyen/css-to-inline-styles' => '2.2.3@b43b05cf43c1b6d849478965062b6ef73e223bb5',
  'vlucas/phpdotenv' => 'v5.3.0@b3eac5c7ac896e52deab4a99068e3f4ab12d9e56',
  'voku/portable-ascii' => '1.5.6@80953678b19901e5165c56752d087fc11526017c',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'amphp/amp' => 'v2.6.0@caa95edeb1ca1bf7532e9118ede4a3c3126408cc',
  'amphp/byte-stream' => 'v1.8.1@acbd8002b3536485c997c4e019206b3f10ca15bd',
  'composer/semver' => '3.2.5@31f3ea725711245195f62e54ffa402d8ef2fdba9',
  'composer/xdebug-handler' => '2.0.2@84674dd3a7575ba617f5a76d7e9e29a7d3891339',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'facade/flare-client-php' => '1.8.0@69742118c037f34ee1ef86dc605be4a105d9e984',
  'facade/ignition' => '2.9.0@e7db3b601ce742568b92648818ef903904d20164',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'fakerphp/faker' => 'v1.14.1@ed22aee8d17c7b396f74a58b1e7fefa4f90d5ef1',
  'felixfbecker/advanced-json-rpc' => 'v3.2.1@b5f37dbff9a8ad360ca341f3240dc1c168b45447',
  'felixfbecker/language-server-protocol' => '1.5.1@9d846d1f5cf101deee7a61c8ba7caa0a975cd730',
  'filp/whoops' => '2.12.1@c13c0be93cff50f88bbd70827d993026821914dd',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'laravel/sail' => 'v1.5.0@7f2d520f8c7d6fc0e5e4949c1363f6ddff0ff116',
  'microsoft/tolerant-php-parser' => 'v0.1.1@6a965617cf484355048ac6d2d3de7b6ec93abb16',
  'mockery/mockery' => '1.4.3@d1339f64479af1bee0e82a0413813fe5345a54ea',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'netresearch/jsonmapper' => 'v4.0.0@8bbc021a8edb2e4a7ea2f8ad4fa9ec9dce2fcb8d',
  'nunomaduro/collision' => 'v5.4.0@41b7e9999133d5082700d31a1d0977161df8322a',
  'openlss/lib-array2xml' => '1.0.0@a91f18a8dfc69ffabe5f9b068bc39bb202c81d90',
  'phan/phan' => '5.2.0@eb59e65097dc8035fdaaa66db4b565585decceb0',
  'phar-io/manifest' => '2.0.1@85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpspec/prophecy' => '1.13.0@be1996ed8adc35c3fd795488a653f4b518be70ea',
  'phpunit/php-code-coverage' => '9.2.6@f6293e1b30a2354e8428e004689671b83871edde',
  'phpunit/php-file-iterator' => '3.0.5@aa4be8575f26070b100fccb67faabb28f21f66f8',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.4@c73c6737305e779771147af66c96ca6a7ed8a741',
  'sabre/event' => '5.1.2@c120bec57c17b6251a496efc82b732418b49d50a',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.3@d89cc98761b8cb5a1a235a6b703ae50d34080e65',
  'sebastian/global-state' => '5.0.2@a90ccbddffa067b51f574dea6eb25d5680839455',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.1@81cd61ab7bbf2de744aba0ea61fae32f721df3d2',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'tysonandre/var_representation_polyfill' => '0.1.1@0a942e74e18af5514749895507bc6ca7ab96399a',
  'vimeo/psalm' => '4.10.0@916b098b008f6de4543892b1e0651c1c3b92cbfa',
  'webmozart/path-util' => '2.3.0@d939f7edc24c9a1bb9c0dee5cb05d8e859490725',
  'laravel/laravel' => 'dev-main@7a99b6a0ddd8535af9b2ea4f1bf523af59b62875',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === []) {
                return false;
            }
        }

        return true;
    }
}
