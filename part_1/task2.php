<?php

const TOTAL_IMGS = 80;
const FELT_TIP_PENS_IMGS = 23;
const PENCILS_IMGS = 40;

const PAINTS_IMGS = TOTAL_IMGS - FELT_TIP_PENS_IMGS - PENCILS_IMGS;
echo "Картин, нарисованных красками - <b style='font-size:1.2rem'>" . PAINTS_IMGS . "</b>";

