## DroneTerrestreLivraisonIHM

Ce repository GitHub contient l'Interface Homme-Machine du projet portant sur la réalisation d'un drone terrestre de livraison réalisé par les Terminales STI2DA et B du lycée Diderot durant l'année scolaire 2022/2023.

# Sujet du projet

Cahier des charges\- no title specified @page { } table { border-collapse:collapse; border-spacing:0; empty-cells:show } td, th { vertical-align:top; font-size:12pt;} h1, h2, h3, h4, h5, h6 { clear:both } ol, ul { margin:0; padding:0;} li { list-style: none; margin:0; padding:0;} <!-- "li span.odfLiEnd" - IE 7 issue--> li span. { clear: both; line-height:0; width:0; height:0; margin:0; padding:0; } span.footnodeNumber { padding-right:1em; } span.annotation\_style\_by\_filter { font-size:95%; font-family:Arial; background-color:#fff000; margin:0; border:0; padding:0; } \* { margin:0;} .P1 { font-size:12pt; font-family:Liberation Serif; writing-mode:page; } .P10 { font-size:12pt; font-family:Liberation Serif; writing-mode:page; text-align:center ! important; font-weight:bold; } .P11 { font-size:12pt; font-family:Liberation Serif; writing-mode:page; } .P12 { font-size:12pt; font-family:Liberation Serif; writing-mode:page; } .P2 { font-size:12pt; font-family:Liberation Serif; writing-mode:page; } .P3 { font-size:20pt; font-family:Liberation Serif; writing-mode:page; font-weight:bold; } .P4 { font-size:12pt; font-family:Liberation Serif; writing-mode:page; } .P5 { font-size:12pt; font-family:Liberation Serif; writing-mode:page; } .P6 { font-size:12pt; font-family:Liberation Serif; writing-mode:page; } .P7 { font-size:12pt; font-family:Liberation Serif; writing-mode:page; text-align:center ! important; font-weight:bold; } .P8 { font-size:12pt; font-family:Liberation Serif; writing-mode:page; text-align:center ! important; font-weight:bold; } .P9 { font-size:12pt; font-family:Liberation Serif; writing-mode:page; text-align:center ! important; font-weight:bold; } .Table1 { width:14.314cm; margin-left:1.492cm; margin-right:auto;} .Table2 { width:14.288cm; margin-left:1.492cm; margin-right:auto;} .Table1\_A1 { padding:0.097cm; border-left-width:thin; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:thin; border-top-style:solid; border-top-color:#000000; border-bottom-width:thin; border-bottom-style:solid; border-bottom-color:#000000; } .Table1\_A2 { padding:0.097cm; border-left-width:thin; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:thin; border-bottom-style:solid; border-bottom-color:#000000; } .Table1\_B1 { padding:0.097cm; border-width:thin; border-style:solid; border-color:#000000; } .Table1\_B2 { padding:0.097cm; border-left-width:thin; border-left-style:solid; border-left-color:#000000; border-right-width:thin; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:thin; border-bottom-style:solid; border-bottom-color:#000000; } .Table2\_A1 { padding:0.097cm; border-left-width:thin; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-width:thin; border-top-style:solid; border-top-color:#000000; border-bottom-width:thin; border-bottom-style:solid; border-bottom-color:#000000; } .Table2\_A2 { padding:0.097cm; border-left-width:thin; border-left-style:solid; border-left-color:#000000; border-right-style:none; border-top-style:none; border-bottom-width:thin; border-bottom-style:solid; border-bottom-color:#000000; } .Table2\_B1 { padding:0.097cm; border-width:thin; border-style:solid; border-color:#000000; } .Table2\_B2 { padding:0.097cm; border-left-width:thin; border-left-style:solid; border-left-color:#000000; border-right-width:thin; border-right-style:solid; border-right-color:#000000; border-top-style:none; border-bottom-width:thin; border-bottom-style:solid; border-bottom-color:#000000; } .Table1\_A { width:3.916cm; } .Table1\_B { width:10.398cm; } .Table2\_A { width:3.889cm; } .Table2\_B { width:10.398cm; } .T1 { font-style:italic; } .T3 { font-weight:bold; } .T4 { font-weight:bold; } .T6 { color:#808080; font-style:italic; } .T7 { color:#808080; font-style:italic; } <!-- ODF styles with no properties representable as CSS --> .T2 .T5 .T8 .T9 { }

Drone terrestre de livraison

Le drone permet une livraison autonome d’un paquet de moins de 10kg à destination d’une adresse identifiée par sa latitude et sa longitude.

Le projet est subdivisé en 3 parties qui peuvent être traitées de manière indépendante. Si le temps passé le permet, ces parties seront réunies pour ne former qu’un tout fonctionnel.

Les parties sont :

Géolocalisation

Un GPS est utilisé pour acquérir la position. Un cap de direction est calculé pour atteindre le point de livraison. Cela suppose donc d’acquérir la connaissance du système de coordonnées géographiques latitude longitude

Propulsion

Une carte électronique double pont en H est utilisée pour piloter 2 moteurs à courant continu assurant l’avancement et le changement de direction du drone

IHM

Une interface Homme Machine permet la programmation de l’adresse de livraison sous la forme des coordonnées latitude longitude et le démarrage du drone (ou son arrêt). Un certain nombre de paramètre pourront être affiché (en fonction du besoin et de l’utilité)

Options :

Anticollision

Un capteur à ultrason est utilisé pour détecter un éventuel obstacle devant le drone

4G

Une clé 4G est intégrée pour un raccordement du système au réseau internet

L’énergie utilisée par le système est électrique.