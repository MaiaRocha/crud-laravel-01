<?php

namespace App\Enums;

enum Status: string 
{
  //toda vez que consultar uma venda o case será trocado. 
  CASE PENDING = 'P';
  CASE APPROVED = 'A';
  CASE CANCELED = 'C';
}