<?php

namespace App\Classes;

class oddEven
{

    protected $firstNumber;
    protected $lastNumber;
    protected $option;
    protected $result;
    protected $i;

    public function __construct( $post = null )
    {
        if ( $post )
        {
            $this->firstNumber = $post['first_number'];
            $this->lastNumber = $post['last_number'];
            $this->option = $post['option'];
        }
    }

    public function index()
    {
        if ( $this->firstNumber < $this->lastNumber )
        {
            for ( $this->i = $this->firstNumber; $this->i <= $this->lastNumber; $this->i++ )
            {
                if ( $this->option == 'Even' )
                {
                    if ( $this->i % 2 == 0 )
                    {
                        $this->result .= $this->i . ' ';
                    }
                }
                elseif ( $this->option == 'Odd' )
                {
                    if ( $this->i % 2 != 0 )
                    {
                        $this->result .= $this->i . ' ';
                    }
                }
            }
        }
        elseif ( $this->firstNumber > $this->lastNumber )
        {
            for ( $this->i = $this->firstNumber; $this->i >= $this->lastNumber; $this->i-- )
            {
                if ( $this->option == 'Even' )
                {
                    if ( $this->i % 2 == 0 )
                    {
                        $this->result .= $this->i . ' ';
                    }
                }
                elseif ( $this->option == 'Odd' )
                {
                    if ( $this->i % 2 != 0 )
                    {
                        $this->result .= $this->i . ' ';
                    }
                }
            }

        }

        return $this->result;
    }
}