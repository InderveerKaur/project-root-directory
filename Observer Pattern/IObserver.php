<?php
interface IObserver
{

  public function notify( IObservable $objSource, IEventArguments $objArguments );

}