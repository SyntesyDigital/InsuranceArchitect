<?php

return [
  'back' => [
    'sidebar' => [
      // -----------------------------------------------------------------//
      //      RIGHT COL
      // -----------------------------------------------------------------//

      [
        'type' => 'box',
        'title' => 'General Settings',
        'identifier' => 'box_2',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-12',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backPrimary',
                'name' => 'backPrimary',
                'label' => 'Primary color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backSecondary',
                'name' => 'backSecondary',
                'label' => 'Secondary color',
              ],
            ], //end children col
          ],
        ], //en children box
      ], //end box 1
    ], //end sidebar

    'body' => [
      // -----------------------------------------------------------------//
      //      LEFT COL
      // -----------------------------------------------------------------//

      [
        'type' => 'box',
        'title' => 'Header Settings',
        'identifier' => 'box_3',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'image',
                'identifier' => 'backLogo',
                'name' => 'backLogo',
                'label' => 'Logo',
                'format' => 'medium',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backHeaderTextColor',
                'name' => 'backHeaderTextColor',
                'label' => 'Text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backHeaderBackgroundColor',
                'name' => 'backHeaderBackgroundColor',
                'label' => 'Background color',
              ],

              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backHeaderRightPartBackgroundHoverColor',
                'name' => 'backHeaderRightPartBackgroundHoverColor',
                'label' => 'Right menu hover background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backHeaderLogoBackgroundColor',
                'name' => 'backHeaderLogoBackgroundColor',
                'label' => 'Logo background color',
              ],
            ],
          ], //end children col
        ],
      ], //end box Header

      [
        'type' => 'box',
        'title' => 'Sidebar Settings',
        'identifier' => 'box_4',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-12',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backSidebarColor',
                'name' => 'backSidebarColor',
                'label' => 'Text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backSidebarHoverColor',
                'name' => 'backSidebarHoverColor',
                'label' => 'Hover text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backSidebarHoverIconBorderColor',
                'name' => 'backSidebarHoverIconBorderColor',
                'label' => 'Hover border and icon color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backSidebarBackgroundColor',
                'name' => 'backSidebarBackgroundColor',
                'label' => 'Background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backSidebarBackgroundColorHover',
                'name' => 'backSidebarBackgroundColorHover',
                'label' => 'Hover Background color',
              ],
            ], //end children col
          ],
        ], //en children box
      ], //end box sidebar

      [
        'type' => 'box',
        'title' => 'Primary button',
        'identifier' => 'box_5',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-12',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backPrimaryButtonBackgroundColor',
                'name' => 'backPrimaryButtonBackgroundColor',
                'label' => 'Background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backPrimaryTextColor',
                'name' => 'backPrimaryTextColor',
                'label' => 'Text color',
              ],
            ], //end children col
          ],
        ], //en children box
      ], //end box primary-btn

      [
        'type' => 'box',
        'title' => 'Secondary button',
        'identifier' => 'box_5',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-12',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backSecondaryButtonBackgroundColor',
                'name' => 'backSecondaryButtonBackgroundColor',
                'label' => 'Background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backSecondaryTextColor',
                'name' => 'backSecondaryTextColor',
                'label' => 'Text color',
              ],
            ], //end children col
          ],
        ], //en children box
      ], //end box secondary-btn
    ],
  ],
  'front' => [
    'sidebar' => [
      // -----------------------------------------------------------------//
      //      RIGHT COL
      // -----------------------------------------------------------------//

      [
        'type' => 'box',
        'title' => 'General Settings',
        'identifier' => 'box_2',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-12',
            'children' => [
              [
                'type' => 'field',
                'input' => 'font',
                'identifier' => 'frontFont',
                'name' => 'frontFont',
                'label' => 'General Font',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontPrimary',
                'name' => 'frontPrimary',
                'label' => 'Primary color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontSecondary',
                'name' => 'frontSecondary',
                'label' => 'Secondary color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'inputColor',
                'name' => 'inputColor',
                'label' => 'Input color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'errorColor',
                'name' => 'errorColor',
                'label' => 'Error color',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'frontButtonRadius',
                'name' => 'frontButtonRadius',
                'label' => 'Border radius (px)',
              ],
            ], //end children col
          ],
          //HEADER
          [
            'type' => 'col',
            'class' => 'col-md-12',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontHeaderTextColor',
                'name' => 'frontHeaderTextColor',
                'label' => 'Header Text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontHeaderRightPartBackgroundColor',
                'name' => 'frontHeaderRightPartBackgroundColor',
                'label' => 'Header Background color',
              ],
            ], //end children col
          ],
          //SIDEBAR
          [
            'type' => 'col',
            'class' => 'col-md-12',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontElementsBackgroundColor',
                'name' => 'frontElementsBackgroundColor',
                'label' => 'Elements background color',
              ],
            ], //end children col
          ],
          //BOX SHADOW
          [
            'type' => 'col',
            'class' => 'col-md-12',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'boxShadowOpacity',
                'name' => 'boxShadowOpacity',
                'label' => 'Box shadow opacity 0-100',
              ],
            ], //end children col
          ],
          //BODY
          [
            'type' => 'col',
            'class' => 'col-md-12',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontBodyBackgroundColor',
                'name' => 'frontBodyBackgroundColor',
                'label' => 'Main background color',
              ],
            ], //end children col
          ],
        ], //en children box
      ], //end box 1
    ], //end sidebar

    'body' => [
      // -----------------------------------------------------------------//
      //      LEFT COL
      // -----------------------------------------------------------------//

      [
        'type' => 'box',
        'title' => 'Header Settings',
        'identifier' => 'box_3',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontHeaderTextColor',
                'name' => 'frontHeaderTextColor',
                'label' => 'Text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontHeaderRightPartTextColor',
                'name' => 'frontHeaderRightPartTextColor',
                'label' => 'Right Part text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontHeaderRightPartBackgroundColor',
                'name' => 'frontHeaderRightPartBackgroundColor',
                'label' => 'Background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontHeaderLogoBackgroundColor',
                'name' => 'frontHeaderLogoBackgroundColor',
                'label' => 'Logo background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontHeaderButtonColor',
                'name' => 'frontHeaderButtonColor',
                'label' => 'Header button color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontHeaderHoverColor',
                'name' => 'frontHeaderHoverColor',
                'label' => 'Header hover button color',
              ],
            ],
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'image',
                'identifier' => 'frontLogo',
                'name' => 'frontLogo',
                'label' => 'Logo',
                'format' => 'medium',
              ],
            ], //end children col
          ],
        ], //en children box
      ], //end box 3

      [
        'type' => 'box',
        'title' => 'Sidebar Settings',
        'identifier' => 'box_4',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontSidebarColor',
                'name' => 'frontSidebarColor',
                'label' => 'Text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontSidebarActiveColor',
                'name' => 'frontSidebarActiveColor',
                'label' => 'Active text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'colorSidebarIconMenu',
                'name' => 'colorSidebarIconMenu',
                'label' => 'Icon menu color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backgroundColorSidebarTooltip',
                'name' => 'backgroundColorSidebarTooltip',
                'label' => 'Background color tooltip',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'colorSidebarTooltip',
                'name' => 'colorSidebarTooltip',
                'label' => 'Text color tooltip',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontSidebarBackgroundColor',
                'name' => 'frontSidebarBackgroundColor',
                'label' => 'Background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontSidebarActiveBackgroundColor',
                'name' => 'frontSidebarActiveBackgroundColor',
                'label' => 'Active Background color',
              ],
            ], //end children col
          ],
        ], //en children box
      ], //end box 4

      [
        'type' => 'box',
        'title' => 'Body Settings',
        'identifier' => 'box_5',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-4',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontBodyH1Color',
                'name' => 'frontBodyH1Color',
                'label' => 'H1 color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontBodyH2Color',
                'name' => 'frontBodyH2Color',
                'label' => 'H2 color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontBodyH3Color',
                'name' => 'frontBodyH3Color',
                'label' => 'H3 color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontBodyH4Color',
                'name' => 'frontBodyH4Color',
                'label' => 'H4 color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontBodyH5Color',
                'name' => 'frontBodyH5Color',
                'label' => 'H5 color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontBodyTextColor',
                'name' => 'frontBodyTextColor',
                'label' => 'Text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontBodyBackgroundColor',
                'name' => 'frontBodyBackgroundColor',
                'label' => 'Background color',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-md-4',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'frontBodyH1FontSize',
                'name' => 'frontBodyH1FontSize',
                'label' => 'H1 font size',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'frontBodyH2FontSize',
                'name' => 'frontBodyH2FontSize',
                'label' => 'H2 font size',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'frontBodyH3FontSize',
                'name' => 'frontBodyH3FontSize',
                'label' => 'H3 font size',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'frontBodyH4FontSize',
                'name' => 'frontBodyH4FontSize',
                'label' => 'H4 font size',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'frontBodyH5FontSize',
                'name' => 'frontBodyH5FontSize',
                'label' => 'H5 font size',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-md-4',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'frontBodyH1FontWeight',
                'name' => 'frontBodyH1FontWeight',
                'label' => 'H1 font weight',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'frontBodyH2FontWeight',
                'name' => 'frontBodyH2FontWeight',
                'label' => 'H2 font weight',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'frontBodyH3FontWeight',
                'name' => 'frontBodyH3FontWeight',
                'label' => 'H3 font weight',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'frontBodyH4FontWeight',
                'name' => 'frontBodyH4FontWeight',
                'label' => 'H4 font weight',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'frontBodyH5FontWeight',
                'name' => 'frontBodyH5FontWeight',
                'label' => 'H5 font weight',
              ],
            ], //end children col
          ],
        ], //en children box
      ], //end box 5

      [
        'type' => 'box',
        'title' => 'Footer Settings',
        'identifier' => 'box_6',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-12',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontFooterTextColor',
                'name' => 'frontFooterTextColor',
                'label' => 'Text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontFooterHoverTextColor',
                'name' => 'frontFooterHoverTextColor',
                'label' => 'Text hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontFooterBackgroundColor',
                'name' => 'frontFooterBackgroundColor',
                'label' => 'Background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontFooterVersionColor',
                'name' => 'frontFooterVersionColor',
                'label' => 'Text version color',
              ],
            ], //end children col
          ],
        ], //en children box
      ], //end box 6

      [
        'type' => 'box',
        'title' => 'Elements Settings',
        'identifier' => 'box_7',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'titleFontSize',
                'name' => 'titleFontSize',
                'label' => 'Title font size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontElementHeadColor',
                'name' => 'frontElementHeadColor',
                'label' => 'Header text color',
              ],
              [
                'type' => 'field',
                'input' => 'select',
                'identifier' => 'elementHeadTextTransform',
                'name' => 'elementHeadTextTransform',
                'label' => 'Text header transform (lowercase, uppercase, capitalize)',
                'options' => [
                  [
                    'name' => 'Sélectionnez...',
                    'value' => '',
                  ],
                  [
                    'name' => 'lowercase',
                    'value' => 'lowercase',
                  ],
                  [
                    'name' => 'uppercase',
                    'value' => 'uppercase',
                  ],
                  [
                    'name' => 'capitalize',
                    'value' => 'capitalize',
                  ],
                ],
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontElementHeadIconColor',
                'name' => 'frontElementHeadIconColor',
                'label' => 'Header icon color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontElementHeadBackground',
                'name' => 'frontElementHeadBackground',
                'label' => 'Header background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontElementColor',
                'name' => 'frontElementColor',
                'label' => 'Body text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontElementBackground',
                'name' => 'frontElementBackground',
                'label' => 'Body background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontElementBorder',
                'name' => 'frontElementBorder',
                'label' => 'Body Separator color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'elementFileInputBorder',
                'name' => 'elementFileInputBorder',
                'label' => 'Element Row border bottom',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'iconFontSizeElement',
                'name' => 'iconFontSizeElement',
                'label' => 'Icon font-size',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'iconColorElement',
                'name' => 'iconColorElement',
                'label' => 'Icon color',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'titleCollapsableFontSize',
                'name' => 'titleCollapsableFontSize',
                'label' => 'Title collapsable font size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'elementHeadCollapsableColor',
                'name' => 'elementHeadCollapsableColor',
                'label' => 'Header collapsable text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontElementHeadCollapsableBackground',
                'name' => 'frontElementHeadCollapsableBackground',
                'label' => 'Header collapsable background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontElementLinkColor',
                'name' => 'frontElementLinkColor',
                'label' => 'Link color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontElementLinkHoverColor',
                'name' => 'frontElementLinkHoverColor',
                'label' => 'Link hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontElementButtonColor',
                'name' => 'frontElementButtonColor',
                'label' => 'Button box color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'frontElementButtonHoverColor',
                'name' => 'frontElementButtonHoverColor',
                'label' => 'Button box hover color',
              ],
            ], //end children col
          ],
        ], //en children box
      ], //end box 7
      [
        'type' => 'box',
        'title' => 'Primary Button Settings',
        'identifier' => 'box_8',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonPrimaryColor',
                'name' => 'buttonPrimaryColor',
                'label' => 'Label color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonPrimaryHoverColor',
                'name' => 'buttonPrimaryHoverColor',
                'label' => 'Label hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonPrimaryIconColor',
                'name' => 'buttonPrimaryIconColor',
                'label' => 'Icon color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonPrimaryIconHoverColor',
                'name' => 'buttonPrimaryIconHoverColor',
                'label' => 'Icon hover color',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'buttonPrimaryBorderRadius',
                'name' => 'buttonPrimaryBorderRadius',
                'label' => 'Border radius (px)',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonPrimaryBackgroundImageColor',
                'name' => 'buttonPrimaryBackgroundImageColor',
                'label' => 'Background (Icon/Image) color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonPrimaryBackgroundBottomColor',
                'name' => 'buttonPrimaryBackgroundBottomColor',
                'label' => 'Background label color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonPrimaryBackgroundIconHoverColor',
                'name' => 'buttonPrimaryBackgroundIconHoverColor',
                'label' => 'Background hover (Icon/Image) color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonPrimaryBackgroundLabelHoverColor',
                'name' => 'buttonPrimaryBackgroundLabelHoverColor',
                'label' => 'Background hover label color',
              ],
            ],
          ],
        ], //en children box
      ], //Primary Button Settings
      [
        'type' => 'box',
        'title' => 'Secondary Button Settings',
        'identifier' => 'box_8b',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonSecondaryColor',
                'name' => 'buttonSecondaryColor',
                'label' => 'Label color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonSecondaryHoverColor',
                'name' => 'buttonSecondaryHoverColor',
                'label' => 'Label hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonSecondaryIconColor',
                'name' => 'buttonSecondaryIconColor',
                'label' => 'Icon color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonSecondaryIconHoverColor',
                'name' => 'buttonSecondaryIconHoverColor',
                'label' => 'Icon hover color',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'buttonSecondaryBorderRadius',
                'name' => 'buttonSecondaryBorderRadius',
                'label' => 'Border radius (px)',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonSecondaryBackgroundImageColor',
                'name' => 'buttonSecondaryBackgroundImageColor',
                'label' => 'Background (Icon/image) color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonSecondaryBackgroundBottomColor',
                'name' => 'buttonSecondaryBackgroundBottomColor',
                'label' => 'Background label color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonSecondaryBackgroundLabelHoverColor',
                'name' => 'buttonSecondaryBackgroundLabelHoverColor',
                'label' => 'Background hover label color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonSecondaryBackgroundIconHoverColor',
                'name' => 'buttonSecondaryBackgroundIconHoverColor',
                'label' => 'Background hover (Icon/Image) color',
              ],
            ],
          ],
        ], //en children box
      ], //Secondary Button Settings
      [
        'type' => 'box',
        'title' => 'Action List',
        'identifier' => 'box_8h',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'labelActionListColor',
                'name' => 'labelActionListColor',
                'label' => 'Label Color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'actionListButtonBackgroundColor',
                'name' => 'actionListButtonBackgroundColor',
                'label' => 'Button background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'actionListButtonBackgroundHoverColor',
                'name' => 'actionListButtonBackgroundHoverColor',
                'label' => 'Button background hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'actionListButtonBorderColor',
                'name' => 'actionListButtonBorderColor',
                'label' => 'Button border color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'actionListButtonBorderHoverColor',
                'name' => 'actionListButtonBorderHoverColor',
                'label' => 'Button border hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'actionListButtonColorIcon',
                'name' => 'actionListButtonColorIcon',
                'label' => 'Button color icon',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'actionListButtonHoverColorIcon',
                'name' => 'actionListButtonHoverColorIcon',
                'label' => 'Button hover color icon',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'actionListDropdownColor',
                'name' => 'actionListDropdownColor',
                'label' => 'Dropdown color text',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'actionListDropdownHoverColor',
                'name' => 'actionListDropdownHoverColor',
                'label' => 'Dropdown hover color text',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'actionListDropdownBackgroundColor',
                'name' => 'actionListDropdownBackgroundColor',
                'label' => 'Dropdown background color',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'labelActionListFontSize',
                'name' => 'labelActionListFontSize',
                'label' => 'Label Font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'actionListDropdownTextFontSize',
                'name' => 'actionListDropdownTextFontSize',
                'label' => 'Dropdown text Font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'actionListDropdownBorderRadius',
                'name' => 'actionListDropdownBorderRadius',
                'label' => 'Dropdown border radius',
              ],
            ],
          ],
        ], //en children box
      ], //Secondary Button Settings
      [
        'type' => 'box',
        'title' => 'Buttons',
        'identifier' => 'box_8d',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-4',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn1Color',
                'name' => 'btn1Color',
                'label' => 'Button 1 color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn1BackgroundColor',
                'name' => 'btn1BackgroundColor',
                'label' => 'Button 1 background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn1BorderColor',
                'name' => 'btn1BorderColor',
                'label' => 'Button 1 border color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn1BackgroundHoverColor',
                'name' => 'btn1BackgroundHoverColor',
                'label' => 'Button 1 background hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn1HoverColor',
                'name' => 'btn1HoverColor',
                'label' => 'Button 1 hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn1HoverBorderColor',
                'name' => 'btn1HoverBorderColor',
                'label' => 'Button 1 hover border color',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'btn1FontSize',
                'name' => 'btn1FontSize',
                'label' => 'Button 1 font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'btn1BorderRadius',
                'name' => 'btn1BorderRadius',
                'label' => 'Button 1 border-radius (px)',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-4',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn2Color',
                'name' => 'btn2Color',
                'label' => 'Button 2 color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn2BackgroundColor',
                'name' => 'btn2BackgroundColor',
                'label' => 'Button 2 background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn2BorderColor',
                'name' => 'btn2BorderColor',
                'label' => 'Button 2 border color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn2BackgroundHoverColor',
                'name' => 'btn2BackgroundHoverColor',
                'label' => 'Button 2 background hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn2HoverColor',
                'name' => 'btn2HoverColor',
                'label' => 'Button 2 hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn2BorderHoverColor',
                'name' => 'btn2BorderHoverColor',
                'label' => 'Button 2 hover border color',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'btn2FontSize',
                'name' => 'btn2FontSize',
                'label' => 'Button 2 font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'btn2BorderRadius',
                'name' => 'btn2BorderRadius',
                'label' => 'Button 2 border-radius (px)',
              ],
            ],
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-4',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn3Color',
                'name' => 'btn3Color',
                'label' => 'Button 3 color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn3BackgroundColor',
                'name' => 'btn3BackgroundColor',
                'label' => 'Button 3 background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn3BorderColor',
                'name' => 'btn3BorderColor',
                'label' => 'Button 3 border color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn3BackgroundHoverColor',
                'name' => 'btn3BackgroundHoverColor',
                'label' => 'Button 3 background hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn3HoverColor',
                'name' => 'btn3HoverColor',
                'label' => 'Button 3 hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'btn3BorderHoverColor',
                'name' => 'btn3BorderHoverColor',
                'label' => 'Button 3 hover border color',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'btn3FontSize',
                'name' => 'btn3FontSize',
                'label' => 'Button 3 font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'btn3BorderRadius',
                'name' => 'btn3BorderRadius',
                'label' => 'Button 3 border-radius (px)',
              ],
            ],
          ],
        ], //en children box
      ], //Buttons
      [
        'type' => 'box',
        'title' => 'Box total Settings',
        'identifier' => 'box_9b',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'titleColor',
                'name' => 'titleColor',
                'label' => 'Label color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'iconColor',
                'name' => 'iconColor',
                'label' => 'Icon color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backgroundColorIcon',
                'name' => 'backgroundColorIcon',
                'label' => 'Icon background color',
              ],

              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'elementNumberColor',
                'name' => 'elementNumberColor',
                'label' => 'Numbers color',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'fontSizeLabel',
                'name' => 'fontSizeLabel',
                'label' => 'Label font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'fontSizeIcon',
                'name' => 'fontSizeIcon',
                'label' => 'Icon font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderRadiusBox',
                'name' => 'borderRadiusBox',
                'label' => 'Border radius box (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'fontSizeNumbers',
                'name' => 'fontSizeNumbers',
                'label' => 'Numbers font-size (px)',
              ],
            ], //end children col
          ],
        ], //en children box
      ], //Secondary Button Settings
      [
        'type' => 'box',
        'title' => 'Box total price Settings',
        'identifier' => 'box_9c',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'titleColorBoxPrice',
                'name' => 'titleColorBoxPrice',
                'label' => 'Title color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'subtitleColorBoxPrice',
                'name' => 'subtitleColorBoxPrice',
                'label' => 'Subtitle color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'subtitle2ColorBoxPrice',
                'name' => 'subtitle2ColorBoxPrice',
                'label' => 'Subtitle 2 color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backgroundColorBoxPrice',
                'name' => 'backgroundColorBoxPrice',
                'label' => 'Background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backgroundHoverColorBoxPrice',
                'name' => 'backgroundHoverColorBoxPrice',
                'label' => 'Background hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'elementNumberPriceColorBoxPrice',
                'name' => 'elementNumberPriceColorBoxPrice',
                'label' => 'Number color',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'fontSizeTitleBoxPrice',
                'name' => 'fontSizeTitleBoxPrice',
                'label' => 'Title font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'fontSizeNumberBoxPrice',
                'name' => 'fontSizeNumberBoxPrice',
                'label' => 'Number font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'fontSizeSubTitleBoxPrice',
                'name' => 'fontSizeSubTitleBoxPrice',
                'label' => 'Subtitle font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'fontSizeSubTitle2BoxPrice',
                'name' => 'fontSizeSubTitle2BoxPrice',
                'label' => 'Subtitle 2 font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderRadiusBoxPrice',
                'name' => 'borderRadiusBoxPrice',
                'label' => 'Border radius box (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'boxShadowOpacityBoxPrice',
                'name' => 'boxShadowOpacityBoxPrice',
                'label' => 'Box shadow (px)',
              ],
            ], //end children col
          ],
        ], //en children box
      ], //Secondary Button Settings
      [
        'type' => 'box',
        'title' => 'Static Banner Settings',
        'identifier' => 'box_9',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'image',
                'identifier' => 'bannerImage',
                'name' => 'bannerImage',
                'label' => 'Banner Image',
                'format' => 'medium',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'richtext',
                'identifier' => 'bannerText',
                'name' => 'bannerText',
                'label' => 'Banner Text',
              ],
            ], //end children col
          ],
        ], //en children box
      ], //end box 7
      [
        'type' => 'box',
        'title' => 'Login Page Settings',
        'identifier' => 'box_10',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-2',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'loginContainerLabelColor',
                'name' => 'loginContainerLabelColor',
                'label' => 'Label color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'loginContainerMotPasseColor',
                'name' => 'loginContainerMotPasseColor',
                'label' => 'Mot de passe color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'loginContainerTitleColor',
                'name' => 'loginContainerTitleColor',
                'label' => 'Title color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'loginInputBorderColor',
                'name' => 'loginInputBorderColor',
                'label' => 'Input border color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'loginContainerBackgroundColor',
                'name' => 'loginContainerBackgroundColor',
                'label' => 'Box background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'loginContainerBorderColor',
                'name' => 'loginContainerBorderColor',
                'label' => 'Border color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'loginButtonBackgroundColor',
                'name' => 'loginButtonBackgroundColor',
                'label' => 'Button background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'loginButtonHoverBackgroundColor',
                'name' => 'loginButtonHoverBackgroundColor',
                'label' => 'Button hover background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'loginButtonTextColor',
                'name' => 'loginButtonTextColor',
                'label' => ' Button text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'loginButtonHoverTextColor',
                'name' => 'loginButtonHoverTextColor',
                'label' => ' Button Hover text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'loginButtonHoverBorderColor',
                'name' => 'loginButtonHoverBorderColor',
                'label' => ' Button Hover border color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'loginBorderColorFooter',
                'name' => 'loginBorderColorFooter',
                'label' => ' Border color footer',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-3',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'loginContainerBorderRadius',
                'name' => 'loginContainerBorderRadius',
                'label' => 'Box border radius (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'loginButtonBorderRadius',
                'name' => 'loginButtonBorderRadius',
                'label' => 'Button border radius (px)',
              ],
              [
                'type' => 'field',
                'input' => 'select',
                'identifier' => 'alignMotDePasseLogin',
                'name' => 'alignMotDePasseLogin',
                'label' => 'Align *mot de passe (top, bottom)',
                'options' => [
                  [
                    'name' => 'Sélectionnez...',
                    'value' => '',
                  ],
                  [
                    'name' => 'top',
                    'value' => 'top',
                  ],
                  [
                    'name' => 'bottom',
                    'value' => 'bottom',
                  ],
                ],
              ],
              [
                'type' => 'field',
                'input' => 'select',
                'identifier' => 'alignHorizontalMotDePasseLogin',
                'name' => 'alignHorizontalMotDePasseLogin',
                'label' => 'Align *mot de passe (center, right)',
                'options' => [
                  [
                    'name' => 'Sélectionnez...',
                    'value' => '',
                  ],
                  [
                    'name' => 'center',
                    'value' => 'center',
                  ],
                  [
                    'name' => 'right',
                    'value' => 'right',
                  ],
                ],
              ],
              [
                'type' => 'field',
                'input' => 'select',
                'identifier' => 'alignFooterLogin',
                'name' => 'alignFooterLogin',
                'label' => 'Align footer (center, right)',
                'options' => [
                  [
                    'name' => 'Sélectionnez...',
                    'value' => '',
                  ],
                  [
                    'name' => 'center',
                    'value' => 'center',
                  ],
                  [
                    'name' => 'right',
                    'value' => 'right',
                  ],
                ],
              ],
              [
                'type' => 'field',
                'input' => 'select',
                'identifier' => 'lowerUpperCaseButtonLogin',
                'name' => 'lowerUpperCaseButtonLogin',
                'label' => 'Text transform button (lowercase, uppercase, capitalize)',
                'options' => [
                  [
                    'name' => 'Sélectionnez...',
                    'value' => '',
                  ],
                  [
                    'name' => 'lowercase',
                    'value' => 'lowercase',
                  ],
                  [
                    'name' => 'uppercase',
                    'value' => 'uppercase',
                  ],
                  [
                    'name' => 'capitalize',
                    'value' => 'capitalize',
                  ],
                ],
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-7',
            'children' => [
              [
                'type' => 'field',
                'input' => 'image',
                'identifier' => 'loginLogo',
                'name' => 'loginLogo',
                'label' => 'Logo',
                'format' => 'medium',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'loginMaxHeightLogo',
                'name' => 'loginMaxHeightLogo',
                'label' => 'Logo max-height (px)',
              ],
              [
                'type' => 'field',
                'input' => 'boolean',
                'identifier' => 'boxBackgroundLogoLogin',
                'name' => 'boxBackgroundLogoLogin',
                'label' => 'Box logo transparent (yes/no)',
              ],
              [
                'type' => 'field',
                'input' => 'boolean',
                'identifier' => 'displayIconsLogin',
                'name' => 'displayIconsLogin',
                'label' => 'Display none icons (yes/no)',
              ],
              [
                'type' => 'field',
                'input' => 'richtext',
                'identifier' => 'titleLogin',
                'name' => 'titleLogin',
                'label' => 'Text login title',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'letterSpacingTitleLogin',
                'name' => 'letterSpacingTitleLogin',
                'label' => 'Letter spacing title (px)',
              ],
              [
                'type' => 'field',
                'input' => 'image',
                'identifier' => 'loginBackgroundImage',
                'name' => 'loginBackgroundImage',
                'label' => 'Background image',
                'format' => 'medium',
              ],
              [
                'type' => 'field',
                'input' => 'richtext',
                'identifier' => 'loginBackgroundImageText',
                'name' => 'loginBackgroundImageText',
                'label' => 'Background image Text',
              ],
              [
                'type' => 'field',
                'input' => 'image',
                'identifier' => 'loginImageBorderTopRightContainer',
                'name' => 'loginImageBorderTopRightContainer',
                'label' => 'Image border top right',
                'format' => 'original',
              ],
              [
                'type' => 'field',
                'input' => 'image',
                'identifier' => 'loginImageBorderBottomLeftContainer',
                'name' => 'loginImageBorderBottomLeftContainer',
                'label' => 'Image border bottom left',
                'format' => 'original',
              ],
            ], //end children col
          ],
        ], //en children box
      ], //end box login

      [
        'type' => 'box',
        'title' => 'Form Settings',
        'identifier' => 'box_11',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'labelColor',
                'name' => 'labelColor',
                'label' => 'Label color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'labelInputColor',
                'name' => 'labelInputColor',
                'label' => 'Label input color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'borderColorInput',
                'name' => 'borderColorInput',
                'label' => 'Border input color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'hoverColorInput',
                'name' => 'hoverColorInput',
                'label' => 'Hover input color',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',

            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'labelPadding',
                'name' => 'labelPadding',
                'label' => 'Label padding (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'labelFontSize',
                'name' => 'labelFontSize',
                'label' => 'Label font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'labelInputFontSize',
                'name' => 'labelInputFontSize',
                'label' => 'Label input font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'labelInputPadding',
                'name' => 'labelInputPadding',
                'label' => 'Label input padding (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderRadiusInput',
                'name' => 'borderRadiusInput',
                'label' => 'Border-radius input (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderPxInputForm',
                'name' => 'borderPxInputForm',
                'label' => 'Border (px) input',
              ],
            ], //end children col
          ],
        ], //en children box
      ], //end box form settings

      [
        'type' => 'box',
        'title' => 'Box 1',
        'identifier' => 'box_12',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backgroundColorBox1',
                'name' => 'backgroundColorBox1',
                'label' => 'Background Color',
              ],
              /*
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'textColorBox1',
                'name' => 'textColorBox1',
                'label' => 'Text Color',
              ],
              */
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'borderColorBox1',
                'name' => 'borderColorBox1',
                'label' => 'Border Color',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderRadiusBox1',
                'name' => 'borderRadiusBox1',
                'label' => 'Border radius (px)',
              ],
            ], //end children col
          ],
        ], //en children box 1
      ], //end box 1

      [
        'type' => 'box',
        'title' => 'Box 2',
        'identifier' => 'box_13',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backgroundColorBox2',
                'name' => 'backgroundColorBox2',
                'label' => 'Background Color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'textColorBox2',
                'name' => 'textColorBox2',
                'label' => 'Text Color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'borderColorBox2',
                'name' => 'borderColorBox2',
                'label' => 'Border Color',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderRadiusBox2',
                'name' => 'borderRadiusBox2',
                'label' => 'Border radius (px)',
              ],
            ], //end children col
          ],
        ], //en children box 2
      ], //end box 2
      [
        'type' => 'box',
        'title' => 'Box 3',
        'identifier' => 'box_14',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backgroundColorBox3',
                'name' => 'backgroundColorBox3',
                'label' => 'Background Color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'textColorBox3',
                'name' => 'textColorBox3',
                'label' => 'Text Color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'borderColorBox3',
                'name' => 'borderColorBox3',
                'label' => 'Border Color',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderRadiusBox3',
                'name' => 'borderRadiusBox3',
                'label' => 'Border radius (px)',
              ],
            ], //end children col
          ],
        ], //en children box 3
      ], //end box 3
      [
        'type' => 'box',
        'title' => 'Image text link',
        'identifier' => 'box_15',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'titleColorImgTxtLink',
                'name' => 'titleColorImgTxtLink',
                'label' => 'Title color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'linkColorImgTxtLink',
                'name' => 'linkColorImgTxtLink',
                'label' => 'Link color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'dateColorImgTxtLink',
                'name' => 'dateColorImgTxtLink',
                'label' => 'Date color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'descColorImgTxtLink',
                'name' => 'descColorImgTxtLink',
                'label' => 'Description color',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'titleFontSizeImgTxtLink',
                'name' => 'titleFontSizeImgTxtLink',
                'label' => 'Title font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'linkFontSizeImgTxtLink',
                'name' => 'linkFontSizeImgTxtLink',
                'label' => 'Link font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'dateFontSizeImgTxtLink',
                'name' => 'dateFontSizeImgTxtLink',
                'label' => 'Date font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'descFontSizeImgTxtLink',
                'name' => 'descFontSizeImgTxtLink',
                'label' => 'Description font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderRadiusImgTxtLink',
                'name' => 'borderRadiusImgTxtLink',
                'label' => 'Border radius (px)',
              ],
            ], //end children col
          ],
        ], //en children box 3
      ], //end box 3
      [
        'type' => 'box',
        'title' => 'Image text title documents',
        'identifier' => 'box_15_b',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-2',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'titleColorImgTxtTitleDocuments',
                'name' => 'titleColorImgTxtTitleDocuments',
                'label' => 'Title color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'borderTitleColorImgTxtTitleDocuments',
                'name' => 'borderTitleColorImgTxtTitleDocuments',
                'label' => 'Border color title',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'descColorImgTxtTitleDocuments',
                'name' => 'descColorImgTxtTitleDocuments',
                'label' => 'Description color',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-md-2',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonColorImgTxtTitleDocuments',
                'name' => 'buttonColorImgTxtTitleDocuments',
                'label' => 'Button 1 color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonBackgroundColorImgTxtTitleDocuments',
                'name' => 'buttonBackgroundColorImgTxtTitleDocuments',
                'label' => 'Button 1 background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonBackgroundHoverColorImgTxtTitleDocuments',
                'name' => 'buttonBackgroundHoverColorImgTxtTitleDocuments',
                'label' => 'Button 1 background hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonColorHoverImgTxtTitleDocuments',
                'name' => 'buttonColorHoverImgTxtTitleDocuments',
                'label' => 'Button 1 color hover',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonBorderColorImgTxtTitleDocuments',
                'name' => 'buttonBorderColorImgTxtTitleDocuments',
                'label' => 'Button 1 border color',
              ],
              [
                'type' => 'field',
                'input' => 'boolean',
                'identifier' => 'buttonTransparentImgTxtTitleDocuments',
                'name' => 'buttonTransparentImgTxtTitleDocuments',
                'label' => 'Button 1 transparent (yes/no)',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-md-2',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'button2ColorImgTxtTitleDocuments',
                'name' => 'button2ColorImgTxtTitleDocuments',
                'label' => 'Button 2 color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'button2BackgroundColorImgTxtTitleDocuments',
                'name' => 'button2BackgroundColorImgTxtTitleDocuments',
                'label' => 'Button 2 background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'button2BackgroundHoverColorImgTxtTitleDocuments',
                'name' => 'button2BackgroundHoverColorImgTxtTitleDocuments',
                'label' => 'Button 2 background hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'button2ColorHoverImgTxtTitleDocuments',
                'name' => 'button2ColorHoverImgTxtTitleDocuments',
                'label' => 'Button 2 color hover',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'button2BorderColorImgTxtTitleDocuments',
                'name' => 'button2BorderColorImgTxtTitleDocuments',
                'label' => 'Button 2 border color',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-3',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'titleFontSizeImgTitleDocuments',
                'name' => 'titleFontSizeImgTitleDocuments',
                'label' => 'Title font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'descFontSizeImgTxtTitleDocuments',
                'name' => 'descFontSizeImgTxtTitleDocuments',
                'label' => 'Description font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderRadiusImgTxtTitleDocuments',
                'name' => 'borderRadiusImgTxtTitleDocuments',
                'label' => 'Border radius box (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'button1FontSizeImgTitleDocuments',
                'name' => 'button1FontSizeImgTitleDocuments',
                'label' => 'Button 1 font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'button2FontSizeImgTitleDocuments',
                'name' => 'button2FontSizeImgTitleDocuments',
                'label' => 'Button 2 font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderRadiusButtons1ImgTxtTitleDocuments',
                'name' => 'borderRadiusButtons1ImgTxtTitleDocuments',
                'label' => 'Border radius button 1 (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderRadiusButtons2ImgTxtTitleDocuments',
                'name' => 'borderRadiusButtons2ImgTxtTitleDocuments',
                'label' => 'Border radius button 2 (px)',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-3',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'titleFontWeightImgTitleDocuments',
                'name' => 'titleFontWeightImgTitleDocuments',
                'label' => 'Title font-weight (100-900)',
              ],
              [
                'type' => 'field',
                'input' => 'image',
                'identifier' => 'iconButton1ImgTitleDocuments',
                'name' => 'iconButton1ImgTitleDocuments',
                'label' => 'Logo',
                'format' => 'medium',
              ],
            ], //end children col
          ],
        ], //en children box 3
      ], //end box 3
      [
        'type' => 'box',
        'title' => 'Horizontal Banner',
        'identifier' => 'box_16',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'titleColorHorizontalBanner',
                'name' => 'titleColorHorizontalBanner',
                'label' => 'Title color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'titleHoverColorHorizontalBanner',
                'name' => 'titleHoverColorHorizontalBanner',
                'label' => 'Title hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'subtitleColorHorizontalBanner',
                'name' => 'subtitleColorHorizontalBanner',
                'label' => 'Subtitle color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'subtitleHoverColorHorizontalBanner',
                'name' => 'subtitleHoverColorHorizontalBanner',
                'label' => 'Subtitle hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backgroundColorHorizontalBanner',
                'name' => 'backgroundColorHorizontalBanner',
                'label' => 'Background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backgroundColorHoverHorizontalBanner',
                'name' => 'backgroundColorHoverHorizontalBanner',
                'label' => 'Background color hover',
              ],
              // [
              //   'type' => 'field',
              //   'input' => 'color',
              //   'identifier' => 'iconArrowColorHorizontalBanner',
              //   'name' => 'iconArrowColorHorizontalBanner',
              //   'label' => 'Icon arrow color',
              // ],
              // [
              //   'type' => 'field',
              //   'input' => 'color',
              //   'identifier' => 'iconArrowHoverColorHorizontalBanner',
              //   'name' => 'iconArrowHoverColorHorizontalBanner',
              //   'label' => 'Icon arrow hover color',
              // ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'titleFontSizeHorizontalBanner',
                'name' => 'titleFontSizeHorizontalBanner',
                'label' => 'Title font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'subtitleFontSizeHorizontalBanner',
                'name' => 'subtitleFontSizeHorizontalBanner',
                'label' => 'Subtitle font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderRadiusHorizontalBanner',
                'name' => 'borderRadiusHorizontalBanner',
                'label' => 'Border radius (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'boxShadowOpacityHorizontalBanner',
                'name' => 'boxShadowOpacityHorizontalBanner',
                'label' => 'Box shadow opacity 0-100',
              ],
            ], //end children col
          ],
        ], //en children box 3
      ], //end box 3
      [
        'type' => 'box',
        'title' => 'Action button',
        'identifier' => 'box_17',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backgroundColorActionButton',
                'name' => 'backgroundColorActionButton',
                'label' => 'Background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backgroundHoverColorActionButton',
                'name' => 'backgroundHoverColorActionButton',
                'label' => 'Background hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'iconColorActionButton',
                'name' => 'iconColorActionButton',
                'label' => 'Icon color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'iconHoverColorActionButton',
                'name' => 'iconHoverColorActionButton',
                'label' => 'Icon hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'titleColorActionButton',
                'name' => 'titleColorActionButton',
                'label' => 'Title color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'titleHoverColorActionButton',
                'name' => 'titleHoverColorActionButton',
                'label' => 'Title hover color',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderTopLeftActionButton',
                'name' => 'borderTopLeftActionButton',
                'label' => 'Border top left radius (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderTopRightActionButton',
                'name' => 'borderTopRightActionButton',
                'label' => 'Border top right radius (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderBottomRightActionButton',
                'name' => 'borderBottomRightActionButton',
                'label' => 'Border bottom right radius (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderBottomLeftActionButton',
                'name' => 'borderBottomLeftActionButton',
                'label' => 'Border bottom left radius (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'fontSizeTitleActionButton',
                'name' => 'fontSizeTitleActionButton',
                'label' => 'Title font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'boxShadowOpacityActionButton',
                'name' => 'boxShadowOpacityActionButton',
                'label' => 'Box shadow opacity 0-100',
              ],
            ], //end children col
          ],
        ], //en children box 3
      ], //end box 3
      [
        'type' => 'box',
        'title' => 'Tabs',
        'identifier' => 'box_18',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'fontColorTab',
                'name' => 'fontColorTab',
                'label' => 'Color font tab',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backgroundColorTab',
                'name' => 'backgroundColorTab',
                'label' => 'Background color tab',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'fontColorActiveTab',
                'name' => 'fontColorActiveTab',
                'label' => 'Color font active tab',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backgroundColorActiveTab',
                'name' => 'backgroundColorActiveTab',
                'label' => 'Background color active tab',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backgroundHoverColorTab',
                'name' => 'backgroundHoverColorTab',
                'label' => 'Background hover color tab',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'backgroundColorContentTab',
                'name' => 'backgroundColorContentTab',
                'label' => 'Background color content tab',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-6',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'fontSizeTab',
                'name' => 'fontSizeTab',
                'label' => 'Font-size tab (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderRadiusTab',
                'name' => 'borderRadiusTab',
                'label' => 'Border radius tab (px)',
              ],
            ], //end children col
          ],
        ], //en children box 3
      ], //end box 3
      [
        'type' => 'box',
        'title' => 'Element Table Settings',
        'identifier' => 'box_19',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-2',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'headerColorTable',
                'name' => 'headerColorTable',
                'label' => 'Header color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'headerBackgroundColorTable',
                'name' => 'headerBackgroundColorTable',
                'label' => 'Header background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'iconColorHeaderTable',
                'name' => 'iconColorHeaderTable',
                'label' => 'Icon color header',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'rowColorTable',
                'name' => 'rowColorTable',
                'label' => 'Row color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'rowHoverColorTable',
                'name' => 'rowHoverColorTable',
                'label' => 'Row hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'rowBackgroundHoverColorTable',
                'name' => 'rowBackgroundHoverColorTable',
                'label' => 'Row background hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'rowOddBackgroundColorTable',
                'name' => 'rowOddBackgroundColorTable',
                'label' => 'Row odd background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'rowEvenBackgroundColorTable',
                'name' => 'rowEvenBackgroundColorTable',
                'label' => 'Row even background color',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-5',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'fontSizeHeaderTable',
                'name' => 'fontSizeHeaderTable',
                'label' => 'Font-size header (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'fontSizeRowTable',
                'name' => 'fontSizeRowTable',
                'label' => 'Font-size row (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'borderRadiusRowTable',
                'name' => 'borderRadiusRowTable',
                'label' => 'Border radius row (px)',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-5',
            'children' => [
              [
                'type' => 'field',
                'input' => 'select',
                'identifier' => 'alignFilterTable',
                'name' => 'alignFilterTable',
                'label' => 'Align filters (top, bottom)',
                'options' => [
                  [
                    'name' => 'Sélectionnez...',
                    'value' => '',
                  ],
                  [
                    'name' => 'top',
                    'value' => 'top',
                  ],
                  [
                    'name' => 'bottom',
                    'value' => 'bottom',
                  ],
                ],
              ],
              [
                'type' => 'field',
                'input' => 'select',
                'identifier' => 'lowerUpperCaseHeaderTable',
                'name' => 'lowerUpperCaseHeaderTable',
                'label' => 'Text transform header (lowercase, uppercase, capitalize)',
                'options' => [
                  [
                    'name' => 'Sélectionnez...',
                    'value' => '',
                  ],
                  [
                    'name' => 'lowercase',
                    'value' => 'lowercase',
                  ],
                  [
                    'name' => 'uppercase',
                    'value' => 'uppercase',
                  ],
                  [
                    'name' => 'capitalize',
                    'value' => 'capitalize',
                  ],
                ],
              ],
            ], //end children col
          ],
        ], //en children box 3
      ], //end box 3
      [
        'type' => 'box',
        'title' => 'Chat',
        'identifier' => 'box_21',
        'children' => [
          [
            'type' => 'col',
            'class' => 'col-md-2',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'senderColorChat',
                'name' => 'senderColorChat',
                'label' => 'Sender text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'senderBackgroundColorChat',
                'name' => 'senderBackgroundColorChat',
                'label' => 'Sender background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'senderBorderColorChat',
                'name' => 'senderBorderColorChat',
                'label' => 'Sender border color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'senderMailColorChat',
                'name' => 'senderMailColorChat',
                'label' => 'Sender mail color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'senderDateColorChat',
                'name' => 'senderDateColorChat',
                'label' => 'Sender date color',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-2',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'recipientColorChat',
                'name' => 'recipientColorChat',
                'label' => 'Recipient text color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'recipientBackgroundColorChat',
                'name' => 'recipientBackgroundColorChat',
                'label' => 'Recipient background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'recipientBorderColorChat',
                'name' => 'recipientBorderColorChat',
                'label' => 'Recipient border color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'recipientDateColorChat',
                'name' => 'recipientDateColorChat',
                'label' => 'Recipient date color',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-2',
            'children' => [
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonColorChat',
                'name' => 'buttonColorChat',
                'label' => 'Button color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonBackgroundColorChat',
                'name' => 'buttonBackgroundColorChat',
                'label' => 'Button background color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonBorderColorChat',
                'name' => 'buttonBorderColorChat',
                'label' => 'Button border color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonBackgroundHoverColorChat',
                'name' => 'buttonBackgroundHoverColorChat',
                'label' => 'Button background hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonColorHoverChat',
                'name' => 'buttonColorHoverChat',
                'label' => 'Button hover color',
              ],
              [
                'type' => 'field',
                'input' => 'color',
                'identifier' => 'buttonborderHoverColorChat',
                'name' => 'buttonborderHoverColorChat',
                'label' => 'Button border hover color',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-3',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'senderFontSizeChat',
                'name' => 'senderFontSizeChat',
                'label' => 'Sender text Font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'senderDateFontSizeChat',
                'name' => 'senderDateFontSizeChat',
                'label' => 'Sender date Font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'senderMailFontSizeChat',
                'name' => 'senderMailFontSizeChat',
                'label' => 'Sender mail Font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'senderBorderRadiusChat',
                'name' => 'senderBorderRadiusChat',
                'label' => 'Sender border-radius (px)',
              ],
            ], //end children col
          ],
          [
            'type' => 'col',
            'class' => 'col-sm-12 col-md-3',
            'children' => [
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'recipientFontSizeChat',
                'name' => 'recipientFontSizeChat',
                'label' => 'Recipient text Font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'recipientDateFontSizeChat',
                'name' => 'recipientDateFontSizeChat',
                'label' => 'Recipient date Font-size (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'recipientBorderRadiusChat',
                'name' => 'recipientBorderRadiusChat',
                'label' => 'Recipient border-radius (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'fontSizeButtonChat',
                'name' => 'fontSizeButtonChat',
                'label' => 'Font-size button (px)',
              ],
              [
                'type' => 'field',
                'input' => 'number',
                'identifier' => 'buttonRadiusChat',
                'name' => 'buttonRadiusChat',
                'label' => 'Button border radius (px)',
              ],
            ], //end children col
          ],
        ], //en children box 3
      ], //end box 3
    ],
  ],
];
