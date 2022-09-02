<?php
// auto-generated by arElasticSearchConfigHandler
// date: 2022/09/01 22:14:17
return array (
  'batch_mode' => true,
  'batch_size' => 500,
  'server' => 
  array (
    'host' => '127.0.0.1',
    'port' => 9200,
  ),
  'index' => 
  array (
    'name' => 'atom',
    'configuration' => 
    array (
      'number_of_shards' => 4,
      'number_of_replicas' => 1,
      'index.mapping.total_fields.limit' => 3000,
      'analysis' => 
      array (
        'analyzer' => 
        array (
          'default' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'preserved_asciifolding',
            ),
          ),
          'autocomplete' => 
          array (
            'tokenizer' => 'whitespace',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'engram',
              2 => 'preserved_asciifolding',
            ),
          ),
          'arabic' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'arabic_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'armenian' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'armenian_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'basque' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'basque_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'brazilian' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'brazilian_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'bulgarian' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'bulgarian_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'catalan' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'catalan_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'czech' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'czech_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'danish' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'danish_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'dutch' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'dutch_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'english' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'english_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'finnish' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'finnish_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'french' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'french_stop',
              2 => 'preserved_asciifolding',
              3 => 'french_elision',
            ),
          ),
          'galician' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'galician_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'german' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'german_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'greek' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'greek_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'hindi' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'hindi_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'hungarian' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'hungarian_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'indonesian' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'indonesian_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'italian' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'italian_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'norwegian' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'norwegian_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'persian' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'persian_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'portuguese' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'portuguese_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'romanian' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'romanian_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'russian' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'russian_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'spanish' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'spanish_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'swedish' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'swedish_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
          'turkish' => 
          array (
            'tokenizer' => 'standard',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'turkish_stop',
              2 => 'preserved_asciifolding',
            ),
          ),
        ),
        'normalizer' => 
        array (
          'alphasort' => 
          array (
            'type' => 'custom',
            'filter' => 
            array (
              0 => 'lowercase',
              1 => 'preserved_asciifolding',
            ),
            'char_filter' => 
            array (
              0 => 'punctuation_filter',
            ),
          ),
        ),
        'filter' => 
        array (
          'engram' => 
          array (
            'type' => 'edgeNGram',
            'min_gram' => 3,
            'max_gram' => 10,
          ),
          'french_elision' => 
          array (
            'type' => 'elision',
            'articles' => 
            array (
              0 => 'l',
              1 => 'm',
              2 => 't',
              3 => 'qu',
              4 => 'n',
              5 => 's',
              6 => 'j',
              7 => 'd',
              8 => 'c',
              9 => 'jusqu',
              10 => 'quoiqu',
              11 => 'lorsqu',
              12 => 'puisqu',
            ),
          ),
          'preserved_asciifolding' => 
          array (
            'type' => 'asciifolding',
            'preserve_original' => true,
          ),
          'arabic_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_arabic_',
          ),
          'armenian_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_armenian_',
          ),
          'basque_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_basque_',
          ),
          'brazilian_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_brazilian_',
          ),
          'bulgarian_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_bulgarian_',
          ),
          'catalan_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_catalan_',
          ),
          'czech_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_czech_',
          ),
          'danish_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_danish_',
          ),
          'dutch_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_dutch_',
          ),
          'english_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_english_',
          ),
          'finnish_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_finnish_',
          ),
          'french_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_french_',
          ),
          'galician_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_galician_',
          ),
          'german_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_german_',
          ),
          'greek_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_greek_',
          ),
          'hindi_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_hindi_',
          ),
          'hungarian_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_hungarian_',
          ),
          'indonesian_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_indonesian_',
          ),
          'italian_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_italian_',
          ),
          'norwegian_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_norwegian_',
          ),
          'persian_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_persian_',
          ),
          'portuguese_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_portuguese_',
          ),
          'romanian_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_romanian_',
          ),
          'russian_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_russian_',
          ),
          'spanish_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_spanish_',
          ),
          'swedish_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_swedish_',
          ),
          'turkish_stop' => 
          array (
            'type' => 'stop',
            'stopwords' => '_turkish_',
          ),
        ),
        'char_filter' => 
        array (
          'strip_md' => 
          array (
            'type' => 'pattern_replace',
            'pattern' => '[\\*_#!\\[\\]\\(\\)\\->`\\+\\\\~:\\|\\^=]',
            'replacement' => ' ',
          ),
          'punctuation_filter' => 
          array (
            'type' => 'pattern_replace',
            'pattern' => '["\'_\\-\\?!\\.\\(\\)\\[\\]#\\*`:;]',
            'replacement' => '',
          ),
        ),
      ),
      'mapper' => 
      array (
        'dynamic' => false,
      ),
    ),
  ),
);
