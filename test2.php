<?php
/**
* Realtime DB helper
* Provides connection handle to a database
* @author Gavin Leone
* @package realtime-fulfilment
* @since Jan 2014
*/
class DbHelper
{
  const FFDB_CONFIG = '/etc/jellyfish/realtime-fulfilment.ini';
  /**
  * connect()
  *
  * @desc create a connection handle to either of our fulfilment databases.
  * @param str database key from realtime.ini file
  * @param str Fulfilment database name. ie; `fulfilment` or `fulfilmentapi`
  * only.
  * @return resource $handle
  */
  public static function connect( $dbIniKey )
  {
      $settings = self::getSettings( self::FFDB_CONFIG );
      $dbhost     = $settings[$dbIniKey]['dbHost'];
      $dbname     = $settings[$dbIniKey]['dbName'];
      $dbuser     = $settings[$dbIniKey]['dbUser'];
      $dbpass     = $settings[$dbIniKey]['dbPass'];
      try
      {
          $handle = new PDO( "mysql:host=$dbhost;dbname=$dbname",
            $dbuser, $dbpass );
      }
      catch( PDOException $e )
      {
          throw new Exception("Cannot connect to $dbname database:: ".
            $e->getMessage());
      }
      return $handle;
  }
  /**
  * getSettings()
  *
  * @desc initialize all settings, for db conn etc
  *
  */
  private static function getSettings( $confIni )
  {
      return parse_ini_file( $confIni , TRUE );
  }
}