<?php
    class Queen
    {
        private $xc;
        private $yc;

        function __construct($xcq, $ycq)
        {
            $this->xc = $xcq;
            $this->yc = $ycq;
        }
        //according to the directions, do i need to put properties in right chea, or nah
        function canAttack($xcp, $ycp)
        {
            if ($this->xc == 0 || $this->yc == 0 || $xcp == 0 || $ycp == 0)
            {
                $canshe = 'You have submitted insufficient information, so we are unable to give you a result at this time. Return to the homepage, input entries for all 4 coordinates, and try again.';
                return $canshe;
            }
            elseif (($this->xc == $xcp))
            {
                return 'Yes';
            }
            elseif (($this->yc == $ycp))
            {
                return 'She sure can!';
            }
            elseif ((($this->xc) - $xcp) == (($this->yc) - $ycp))
            {
                return 'Yes!';
            }
            else
            {
                $canshe = 'nope, nothing to see here';
                return $canshe;
            }
            return $canshe;
        }
    }
