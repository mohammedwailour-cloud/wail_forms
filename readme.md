j'ai crée une classe ProductType dans un dossier séparé je l'ai nommé Form/Type
cette classe implemente biensur de la classe AbstractType , puis j'ai redefini la méthode buildForm(FormBuilderInterface $builder, array $options)
pour travailler avec FormBuilderInterface  j'ai l'importer et même pour d'heriter de la AbstractType je l'ai importer
je trouve toujours les classes concernés dans Vendor/Symfony/Form

Sur ce $builder j'ai appliqué la méthode add() qui prend en paramètre child et type , chaque add ajoute un champs avec nom child et type de data donc à l'interieur j'ai utilisé les mots clés  'label' et 'attr'  équivalent à '<label>' et class,style, min,max etc .. en html ..
dans la vidéo le prof a mis tout ces attributs à l'interieur du Options :[ ], moi je les ai mis directement à l'interieur du [ ] sans options et ça marchait
j'ai utilisé aussi la fonction configureOptions(OptionsResolver $resolver) pour crsf.


Dans la vue index.html.twig  , j'ai utilisé la fonction helper du twig  form qui prend l'instance du formulaire qu'on a crée dans le controlleur à l'aide du  createForm(ProductType::class);   dans mon cas je l'ai nommé 'product'

Pour l'affichage du chaque row ou ligne j'avais le choix d'afficher toute la ligne à la fois avec form_row ou de séparer libellé seul + l'input seul  form_label, form_widget , j'ai choisi la deuxieme option pour mieux appliquer Bootstrap, et j'ai mis chaque label + input dans une div séparée
j'ai mis le boutton Add to cart à l'exterieur de ProductType pour qu'il soit réutilisable.
